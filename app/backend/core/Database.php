<?php

class Database
{
    private static Database $instance;
    private $pdo;
    private $query;
    private $error = false;
    private $results;
    private $count = 0;

    private function __construct()
    {
        try {
            $this->pdo = new PDO(
                'mysql:host=' . Config::get('mysql/host') . ';' .
                'dbname=' . Config::get('mysql/db_name'),
                Config::get('mysql/username'),
                Config::get('mysql/password')
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public static function getInstance(): self
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function query($sql, $params = [])
    {
        $this->error = false;

        if ($this->query = $this->pdo->prepare($sql)) {
            $x = 1;

            if (count($params)) {
                foreach ($params as $param) {
                    $this->query->bindvalue($x, $param);
                    $x++;
                }
            }

            if ($this->query->execute()) {
                $this->results     = $this->query->fetchAll(PDO::FETCH_OBJ);
                $this->count       = $this->query->rowCount();
            } else {
                $this->error = true;
            }
        }

        return $this;
    }

    public function action($action, $table, $where = []): Database
    {
        if (count($where) !== 3 && $where !== []) {
            throw new Exception('where em formato incorreto');
        }

        if ($where == []) {
            $sql = "{$action} FROM {$table}";

            if (!$this->query($sql)->error()) {
                return $this;
            }
        }

        $operators  = ['=', '>', '<', '>=', '<='];

        $field      = $where[0];
        $operator   = $where[1];
        $value      = $where[2];

        if (in_array($operator, $operators)) {
            $sql = "{$action} FROM {$table} WHERE {$field} {$operator} ?";

            var_dump($sql);
            if (!$this->query($sql, [$value])->error()) {
                return $this;
            }
        }
        return $this;
    }

    public function get($table, $where = [])
    {
        return $this->action('SELECT *', $table, $where);
    }

    public function delete($table, $where = [])
    {
        return $this->action('DELETE', $table, $where);
    }

    public function insert($table, $fields = []): bool
    {
        if (count($fields) === 0) {
            return false;
        }

        $keys   = array_keys($fields);
        $values = '';
        $x      = 1;

        foreach ($fields as $field) {
            $values .= '?';

            if ($x < count($fields)) {
                $values .= ', ';
            }

            $x++;
        }

        $sql = "INSERT INTO {$table} (`" . implode('`, `', $keys) . "`) VALUES ({$values})";

        if (!$this->query($sql, $fields)->error()) {
            return true;
        }

        return false;
    }

    public function update($table, $id, $fields)
    {
        $set    = '';
        $x      = 1;

        foreach ($fields as $name => $value) {
            $set .= "{$name} = ?";

            if ($x < count($fields)) {
                $set .= ', ';
            }

            $x++;
        }

        $sql = "UPDATE {$table} SET {$set} WHERE uid = {$id}";

        if (!$this->query($sql, $fields)->error()) {
            return true;
        }

        return false;
    }

    public function results()
    {
        return $this->results;
    }

    public function first()
    {
        return $this->results()[0];
    }

    public function error()
    {
        return $this->error;
    }

    public function count()
    {
        return $this->count;
    }
}
