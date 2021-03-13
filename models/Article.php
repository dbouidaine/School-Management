<?php 

namespace models;

class Article extends Model{

    static function count(){
        return Model::countM('article');
    }

    static function countByCategory($category){
        $connection=DataBase::connect();
        $query=$connection->prepare('SELECT COUNT(*) AS count FROM article_concern_category WHERE (category=? OR category="all")  ;');
        $query->bindParam(1,$category);
        $query->execute();
        $query=$query->fetch((\PDO::FETCH_ASSOC));
        return $query['count'];
    }

    static function get($id){
        return parent::getM($id,'article');
    }

    static function getLast(){
        $connection=DataBase::connect();
        $query=$connection->prepare('SELECT * FROM article WHERE id=(SELECT max(id) FROM article);');
        $query->execute();
        return $query->fetch((\PDO::FETCH_ASSOC))['id'];
    }

    static function getMany($from,$count){
        // get $count articles from the $from -th article
        $connection=DataBase::connect();
        $query=$connection->prepare('SELECT id, SUBSTRING(title,1,50) AS title,image,SUBSTRING(description,1,50) AS
        description FROM article ORDER BY created_at DESC LIMIT ?,?;');
        $query->bindParam(1,$from);
        $query->bindParam(2,$count);
        $query->execute();
        return $query->fetchAll((\PDO::FETCH_ASSOC));
    }
    
    static function getManyWithCategory($from,$count,$category){
        // get $count articles from the $from -th article
        $connection=DataBase::connect();
        $query=$connection->prepare('SELECT id, SUBSTRING(title,1,50) AS title,image,SUBSTRING(description,1,50) AS
        description FROM article JOIN
        article_concern_category ON article.id=article_concern_category.article WHERE (category=? OR category="all") ORDER BY created_at DESC LIMIT ?,?;');
        $query->bindParam(1,$category);
        $query->bindParam(2,$from);
        $query->bindParam(3,$count);
        $query->execute();
        return $query->fetchAll((\PDO::FETCH_ASSOC));
    }

    static function new($title,$image,$description,$author){
        $connection=DataBase::connect();
        //print_r($_POST);
        $query=$connection->prepare('INSERT INTO article (title,description,image,author) VALUES (?,?,?,?);');
        $query->execute([htmlspecialchars($title),htmlspecialchars($description),$image,$author]);
    }

    static function update($data,$files){
        $connection=DataBase::connect();
        if (empty($files)){
            $query=$connection->prepare('UPDATE article SET title=?,description=?, WHERE id=?;');
            $query->execute([htmlspecialchars($data['title']),htmlspecialchars($data['description']),$data['id']]);
        }
        else{
            $query=$connection->prepare('UPDATE article SET title=?,description=?,image=? WHERE id=?;');
            $query->execute([htmlspecialchars($data['title']),htmlspecialchars($data['description']),$files['image']['name'],$data['id']]);
        }
    }

    static function newConcernCategory($article_id,$category_name){
        $connection=DataBase::connect();
        $query=$connection->prepare('INSERT INTO article_concern_category (article,category) VALUES (?,?);');
        $query->execute([$article_id,$category_name]);
    }

    static function destroy($id){
        parent::destroyM($id,"article");
    }
}