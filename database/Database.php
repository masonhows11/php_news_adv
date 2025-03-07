<?php


namespace Database;

use Exception;
use PDO;
use PDOException;

class Database
{


    private PDO $connection;

    private array $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    );

    private string $db_host = DB_HOST;
    private string $db_username = DB_USERNAME;
    private string $db_database = DB_DATABASE;
    private string $db_password = DB_PASSWORD;


    public function __construct()
    {

        try {
            $this->connection = new PDO("mysql:host=$this->db_host;dbname=" . $this->db_database, $this->db_username, $this->db_password, $this->options);
            //echo "Establish database connection successfully";
        } catch (\PDOException $exception) {
            echo "Error" . $exception->getMessage();
            exit();
        }
    }


    public function select($sql, $values = null)
    {
        try {

            $state = $this->connection->prepare($sql);

            if ($values == null) {

                $state->execute();

            } else {

                $state->execute($values);
            }
            $result = $state;
            return $result;

        } catch (PDOException $e) {
            # code...
            // echo "Error " . $e->getMessage();
            return false;
        }
    }


    public function insert($table, $columns, $values)
    {

        try {

          $state = $this->connection
                    ->prepare("INSERT INTO " . $table . "(" . implode(', ', $columns)." ,created_at) VALUES  ( :" . implode(', :', $columns) . " , now());");
            // to create associative array for key => value
            // use array_combine


            $state->execute(array_combine($columns, $values));
            return true;
        } catch (PDOException $e) {
            # code...
            return "Error " . $e->getMessage();
        }
    }


    public function update($table, $id, $columns, $values): bool
    {

        try {

            // space in sql query it is very, very important
            // any mistake in syntax query no working
            $sql = "UPDATE " . $table . " SET";
            foreach (array_combine($columns, $values) as $key => $value) {
                if ($value) {
                    $sql .= " `" . $key . "` = ? ,";
                } else {
                    $sql .= " `" . $key . "` = NULL ,";
                }
            }
            $sql .= " updated_at = now()";
            $sql .= "WHERE id = ? ";

            // to create associative array for key => value
            // use array_combine
            $state = $this->connection->prepare($sql);
            $state->execute(array_merge(array_filter(array_values($values)), [$id]));
            return true;
        } catch (PDOException $e) {
            # code...
            // echo "Error " . $e->getMessage();
            return false;
        }
    }


    public function delete($table, $id): bool
    {
        try {

            $sql = "DELETE FROM " . $table . " WHERE id = ?";
            $state = $this->connection->prepare($sql);
            $state->execute([$id]);

            return true;

        } catch (PDOException $exception) {
            return false;
        }
    }

    // create database table
    public function createTable($query)
    {
        try {

            $this->connection->exec($query);
            return true;

        } catch (PDOException $exception)
        {
            echo "Error :" . $exception->getMessage();
            exit();
        }
    }
}
