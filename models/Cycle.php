<?php 

namespace models;

class Cycle extends Model{

    static function getClasses($cycle){
        $connection=DataBase::connect();
        $query=$connection->prepare('SELECT class.name, class.calendar FROM class JOIN year ON class.year=year.name WHERE cycle=? ;');
        $query->execute([$cycle]);
        return $query->fetchAll((\PDO::FETCH_ASSOC));
    }

    static function getInfoPract($cycle){
        $connection=DataBase::connect();
        $query=$connection->prepare('SELECT * FROM info_pract WHERE cycle=? ORDER BY created_at DESC ;');
        $query->execute([$cycle]);
        return $query->fetchAll((\PDO::FETCH_ASSOC));
    }

}