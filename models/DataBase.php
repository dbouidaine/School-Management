<?php

namespace models;

class DataBase{
    static $connection;

    static function connect(){
        if(!isset(DataBase::$connection)){
            $dsn="mysql:dbname=".DB_NAME.";host=".DB_HOST.";";
            try{
                DataBase::$connection=new \PDO($dsn,DB_USER,DB_PASSWORD);
                DataBase::$connection->setAttribute(\PDO::ATTR_EMULATE_PREPARES,false);
            }
            catch (\PDOException $ex){
                \app\Router::redirect('errors/404');
            }
            return DataBase::$connection;
        }
        else{
            return DataBase::$connection;
        } 
    }
}