<?php

namespace App\Model;

class DB
{
    protected $pdo;
    protected $table;

    public function __construct()
    {
        $config = require __DIR__ . '/../confiq.php';
        try {
            $this->pdo = new \PDO("mysql:host=127.0.0.1;dbname={$config['db']['database']}", $config['db']['username'], $config['db']['password']);
        } catch (\Exception $e) {
            die('Error : ' . $e->getMessage());
        }
    }
    public function select()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM {$this->table}");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }
}
