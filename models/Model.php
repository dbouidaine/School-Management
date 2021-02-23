<?php

namespace models;

class Model{

    static function countM($table){
        $connection=DataBase::connect();
        $query=$connection->prepare('SELECT COUNT(*) AS count FROM '.$table.';');
        $query->execute();
        $query=$query->fetch((\PDO::FETCH_ASSOC));
        return $query['count'];
    }
    
    static function getM($id,$table){
        // get by id
        $connection=DataBase::connect();
        $query=$connection->prepare('SELECT * FROM '.$table.' WHERE id=?;');
        $query->bindParam(1,$id);
        $query->execute();
        return $query->fetch((\PDO::FETCH_ASSOC));
    }

    static function destroyM($id,$table){
        $connection=DataBase::connect();
        $query=$connection->prepare('DELETE FROM '.$table.' WHERE id=?;');
        $query->bindParam(1,$id);
        $query->execute();
    }

}