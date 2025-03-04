<?php


namespace Database;

use PDO;

class Database{


    private $connection;

    private array $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                             PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                             PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8');

    private string $db_host = DB_HOST;
    private string $db_username = DB_USERNAME;
    private string $db_database = DB_DATABASE;
    private string $db_password = DB_PASSWORD;


    public function __construct()
    {

        try {
            $this->connection = new PDO("mysql:host=$this->db_host;dbname=".$this->db_database, $this->db_username, $this->db_password,$this->options);
            //echo "Establish database connection successfully";
        }catch (\PDOException $exception){
            echo "Error" . $exception->getMessage();
            exit();
        }
    }


}