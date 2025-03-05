<?php


class CreateDB extends \Database\Database {

    private array $createTableQueries = [

        // add create tables queries

    ];


    public function run()
    {
        foreach ($this->createTableQueries as $query){

            // this method exist in database class that we extends
            $this->createTable($query);

        }
    }
}