<?php

interface DatabaseContract
{
    public function connect();
    // public function all($args = ['*']);
    // public function find($arg);
    // public function save();
    // public function update();
    // public function delete();
}
interface ModelContract
{
    public function create();
}

class Database implements DatabaseContract
{


    private $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    );
    public function connect(): PDO
    {
        try {
            $this->pdo = new PDO("mysql:host=localhost;dbname=test;", "root", "", $this->options);
            return $this->pdo;
        } catch (PDOException $ex) {
            $message = $ex->getMessage();
            exit($message);
        }
    }
}
class Model extends Database implements ModelContract
{
    protected $connection;
    protected $table;
    protected $primaryKey = "id";
    protected $keyType = "int";
    public function create()
    {
    }

    public function getColumns()
    {
        $table = $this->table ?? get_class($this);
        $sql = "SELECT * FROM {$table}";
        echo $sql;
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $columns = $stmt->fetchObject(get_class($this));
        echo "<pre>";
        die(var_dump($columns));
        echo "</pre>";
        //$cols = implode(",", array_keys($columns));
        //echo $cols;
    }
}


class Student extends Model
{
    protected $table = "user";
}
$user = new Student();

$user->getColumns();
$user->create();
