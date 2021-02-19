<?php 

namespace models;

class Article extends Model{

    static function count(){
        $connection=DataBase::connect();
        $query=$connection->prepare('SELECT COUNT(*) AS count FROM article;');
        $query->execute();
        $query=$query->fetch((\PDO::FETCH_ASSOC));
        return $query['count'];
    }

    static function get($id){
        $connection=DataBase::connect();
        $query=$connection->prepare('SELECT * FROM article WHERE id=?;');
        $query->bindParam(1,$id);
        $query->execute();
        $query=$query->fetch((\PDO::FETCH_ASSOC));
        return $query;
    }
    
    static function getMany($from,$count){
        $connection=DataBase::connect();
        $query=$connection->prepare('SELECT * FROM article ORDER BY created_at DESC LIMIT ?,?;');
        $query->bindParam(1,$from);
        $query->bindParam(2,$count);
        $query->execute();
        $query=$query->fetchAll((\PDO::FETCH_ASSOC));
        return $query;
    }
}