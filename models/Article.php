<?php 

namespace models;

class Article extends Model{

    static function count(){
        return Model::countM('article');
    }

    static function get($id){
        return parent::getM($id,'article');
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

    static function new($title,$image,$description,$author){
        $connection=DataBase::connect();
        $query=$connection->prepare('INSERT INTO article (title,description,image,author) VALUES (?,?,?,?);');
        $query->execute([$title,$description,$image,$author]);
    }

    static function destroy($id){
        parent::destroyM($id,"article");
    }
}