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
        // get an article by id
        $connection=DataBase::connect();
        $query=$connection->prepare('SELECT * FROM article WHERE id=?;');
        $query->bindParam(1,$id);
        $query->execute();
        return $query->fetch((\PDO::FETCH_ASSOC));
    }
    
    static function getMany($from,$count){
        // get $count articles from the $from -th article
        $connection=DataBase::connect();
        $query=$connection->prepare('SELECT id, SUBSTRING(title,1,50) AS title,image,SUBSTRING(description,1,50) AS description FROM article ORDER BY created_at DESC LIMIT ?,?;');
        $query->bindParam(1,$from);
        $query->bindParam(2,$count);
        $query->execute();
        return $query->fetchAll((\PDO::FETCH_ASSOC));
    }
}