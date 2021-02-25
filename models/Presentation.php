<?php 

namespace models;

class Presentation extends Model{

    static function getAll(){
        $connection=DataBase::connect();
        $query=$connection->prepare('SELECT * FROM presentation ORDER BY presentation.order ASC;');
        $query->execute();
        return $query->fetchAll((\PDO::FETCH_ASSOC));
    }

    static function updateOrder($data){
        $connection=DataBase::connect();
        foreach(array_keys($data) as $key){
            $query=$connection->prepare('UPDATE presentation SET presentation.order=? WHERE id=?;');
            $query->execute([$data[$key],$key]);
        }
    }
}