<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkEasySdk\Wrappers;

use PDO;
use PDOStatement;
use VkEasySdk\Exceptions\VkDatabaseException;

class Database {

    /**
     * @var PDO - database object
     */
    private PDO $db;

    /**
     * @var string - префикс для таблиц
     */
    private string $prefix = '';

    /**
     * Регулярное выражение для извлечения имени таблицы
     */
    private const PREG_TABLE_NAME = '#(FROM|JOIN)\s*([_0-9A-Za-z.]+)#i';

    /**
     * Соединение с базой данных
     *
     * @param string $driver
     * @param string $host
     * @param string $username
     * @param string $password
     * @param string $database
     * @param string $charset
     * @param string|int|null $port
     * @param array $options
     * @throws VkDatabaseException
     */
    public function connect(string $driver, string $host, string $username, string $password, string $database, string $charset='utf8mb4', string|int $port = null, array $options = []) {
        $dsn = $this->getDriver($driver, $host, $database, $charset, $port);

        if($driver == 'mysql') {
            $options[PDO::MYSQL_ATTR_USE_BUFFERED_QUERY] = true;
            $options[PDO::ATTR_EMULATE_PREPARES] = true;
        }

        try {
            $this->db = new \PDO($dsn, $username, $password, array_merge(
                (is_array($options) ? $options : [])
            ));

            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            throw new VkDatabaseException($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Проверяет, было ли установлено соединение с сервером
     *
     * @return bool true в случае успеха
     */
    public function isConnected(): bool {
        return is_object($this->db);
    }

    /**
     *
     * @param string $driver
     * @param string $host
     * @param string $database
     * @param string $charset
     * @param string|int|null $port
     * @return string
     */
    protected function getDriver(string $driver, string $host, string $database, string $charset, string|int $port = null): string {
        $driver = match ($driver) {
            'sqlite', 'sqlite2' => "{$driver}:{$host}",
            'sqlsrv' => "sqlsrv:Server={$host};Database={$database}",
            'firebird', 'oci' => "{$driver}:dbname={$database}",
            default => "{$driver}:host={$host};dbname={$database}",
        };

        $driver .= !empty($port) ? ";port={$port}" : "";
        $driver .= !empty($charset) ? ";charset={$charset}" : "";

        return $driver;
    }

    /**
     * Функция позволяет выполнить sql запрос
     *
     * @param string $sql sql запрос
     * @param array $args параметры
     * @return PDOStatement
     * @throws VkDatabaseException
     */
    public function query(string $sql, array $args = []): PDOStatement {
        if(empty(trim($sql))) {
            throw new VkDatabaseException('Sql argument is null');
        }

        // Добавляет префикс к таблицам
        preg_match_all(self::PREG_TABLE_NAME, $sql, $ma);
        if(is_array($ma)) {
            if(isset($ma[2])) {
                $tables = array_unique($ma[2]);
                foreach ($tables as $matches) {
                    $replace = $this->prefix . $matches;
                    $sql = str_replace($matches, $replace, $sql);
                }
            }
        }

        if(empty($args)) {
            return $this->db->query($sql);
        }

        $stm = $this->db->prepare($sql);
        $stm->execute($args);

        return $stm;
    }

    /**
     * Получить запись
     *
     * @param string $sql sql запрос
     * @param array $args параметры
     * @return object|bool возвращает единственную запись либо FALSE в случае если запись не найдена
     * @throws VkDatabaseException
     */
    public function row(string $sql, array $args = []): object|bool {
        return $this->query($sql, $args)->fetch(PDO::FETCH_OBJ);
    }

    /**
     * Получить массив записей
     *
     * @param string $sql sql запрос
     * @param array $args параметры
     * @return array возвращает несколько записей
     * @throws VkDatabaseException
     */
    public function rows(string $sql, array $args = []): array {
        return $this->query($sql, $args)->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * Поиск данных в базе данных
     * Пример: $sql->search('test', ['name', 'Василий'])
     * Эквивалентно записи: SELECT * FROM test WHERE name LIKE '%Василий%'
     *
     * @param string $table Имя таблицы
     * @param array $values Массив искомых значений в формате ['name', 'Paulo']
     * @return array
     * @throws VkDatabaseException
     */
    public function search(string $table, array $values): array {
        return $this->rows("SELECT * FROM {$table} WHERE {$values[0]} LIKE '%{$values[1]}%'");
    }

    /**
     * Получить количество записей
     *
     * @param string $sql sql запрос
     * @param array $args параметры
     * @return int возвращает количество записей
     * @throws VkDatabaseException
     */
    public function count(string $sql, array $args = []): int {
        return $this->query($sql, $args)->rowCount();
    }

    /**
     * Устанавливает префикс для таблиц
     *
     * @param string $prefix
     */
    public function setPrefix(string $prefix): void {
        $this->prefix = $prefix . '_';
    }

    /**
     * @param string $table
     * @param string|int $id
     * @return object|bool возвращает единственную запись по id, либо FALSE в случае если запись не найдена
     * @throws VkDatabaseException
     */
    public function getById(string $table, string|int $id): object|bool {
        return $this->row("SELECT * FROM {$table} WHERE id = :id", ['id' => $id]);
    }

    /**
     * Добавление новой записи в таблицу
     *
     * @param string $table имя таблицы
     * @param array $arg параметры в виде ассоциативного массива
     * @return int возвращает первичный ключ добавленной записи
     * @throws VkDatabaseException
     */
    public function insert(string $table, array $arg): int {
        $columns = implode(',', array_keys($arg));
        $values = array_values($arg);

        $placeholders = array_map(fn($x) => '?', array_keys($arg));
        $placeholders = implode(',', array_values($placeholders));

        $this->query("INSERT INTO {$table} ({$columns}) VALUES ({$placeholders})", $values);
        return $this->lastInsertId();
    }

    /**
     * Множественное добавление новых записей в таблицу
     *
     * @param string $table имя таблицы
     * @param array $args параметры
     * @return array возвращает массив с первичными ключами добавленных записей
     * @throws VkDatabaseException
     */
    public function multiInsert(string $table, array $args): array {
        $keys = [];
        foreach ($args as $k => $v) {
            $keys[] = $this->insert($table, $v);
        }

        return $keys;
    }

    /**
     * Обновить запись в таблице
     *
     * @param string $table имя таблицы
     * @param array $records Имена полей и новые значения в формате ['fieldname' => 'newvalue', 'fieldname2' => 'newvalue2']
     * @param array $where Имена полей и значения в формате ['fieldname' => 'value', 'fieldname2' => 'value2'].
     * @return int Возвращает количество строк, затронутых последним SQL-запросом
     * @throws VkDatabaseException
     */
    public function update(string $table, array $records, array $where): int {
        $fields = [];

        foreach($records as $k => $v) {
            $fields['records'][] = "{$k}=:{$k}";
            $fields['keys'][":{$k}"] = $v;
        }

        $fields['records'] = implode(', ', $fields['records']);

        $i = 0;
        foreach($where as $k => $v){
            $fields['where'][] = $i == 0 ? "{$k}=:{$k}" . 2 : " AND {$k}=:{$k}" . 2;
            $fields['keys'][":{$k}" . 2] = $v;
            $i++;
        }

        $fields['where'] = implode('', $fields['where']);

        $stmt = $this->query("UPDATE {$table} SET {$fields['records']} WHERE {$fields['where']}", $fields['keys']);
        return $stmt->rowCount();
    }

    /**
     * Удаление записей
     *
     * @param string $table имя таблицы
     * @param array $where Имена полей и значения в формате ['fieldname' => 'value', 'fieldname2' => 'value2'].
     * @return int Возвращает количество строк, затронутых последним SQL-запросом
     * @throws VkDatabaseException
     */
    public function delete(string $table, array $where): int {
        $i = 0;
        $values = [];

        foreach($where as $key=>$val){
            $values['where'][] = $i++ == 0 ? "{$key}=:{$key}" : " AND {$key}=:{$key}";
            $values['keys'][":$key"] = $val;
        }

        $values['where'] = implode('', $values['where']);

        $stmt = $this->query("DELETE FROM {$table} WHERE {$values['where']}", $values['keys']);
        return $stmt->rowCount();
    }

    /**
     * Удалить все записи в таблице
     *
     * @param string $table Имя таблицы
     * @return int Возвращает количество строк, затронутых последним SQL-запросом
     * @throws VkDatabaseException
     */
    public function deleteAll(string $table): int {
        $stmt = $this->query("DELETE FROM {$table}");
        return $stmt->rowCount();
    }

    /**
     * Удалить запись по идентификатору
     *
     * @param string $table Имя таблицы
     * @param string|int $id Идентификатор
     * @return int Возвращает количество строк, затронутых последним SQL-запросом
     * @throws VkDatabaseException
     */
    public function deleteById(string $table, string|int $id): int {
        $stmt = $this->query("DELETE FROM {$table} WHERE id=:id", ['id' => $id]);
        return $stmt->rowCount();
    }

    /**
     * Мгновенного удаления всех записей в таблице
     *
     * @param string $table
     * @return int
     * @throws VkDatabaseException
     */
    public function truncate(string $table): int {
        $stmt = $this->query("TRUNCATE TABLE $table");
        return $stmt->rowCount();
    }

    /**
     * Получить первичный ключ, последней вставленной записи
     *
     * @return int
     */
    public function lastInsertId(): int {
        return $this->db->lastInsertId();
    }

    /**
     * Возвращает префикс для таблиц
     *
     * @return string
     */
    public function getPrefix(): string {
        return $this->prefix;
    }

    /**
     * Получить экземпляр PDO
     *
     * @return PDO
     */
    public function getPdo(): PDO {
        return $this->db;
    }

}