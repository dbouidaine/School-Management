<?php 

namespace models;

class Presentation extends Model{
    
    static function get($id){
        return parent::getM($id,'presentation');
    }

    static function getAll(){
        $connection=DataBase::connect();
        $query=$connection->prepare('SELECT * FROM presentation ORDER BY presentation.order ASC,presentation.`created_at` DESC;');
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

    static function new($data){
        $connection=DataBase::connect();
        $query=$connection->prepare('INSERT INTO presentation (paragraph,image) VALUES (?,?);');
        $query->execute([htmlspecialchars($data['paragraph']),$data['image']]);
    }

    static function update($data,$files){
        $connection=DataBase::connect();
        if (empty($files)){
            $query=$connection->prepare('UPDATE presentation SET paragraph=? WHERE id=?;');
            $query->execute([htmlspecialchars($data['paragraph']),$data['id']]);
        }
        else{
            $query=$connection->prepare('UPDATE presentation SET paragraph=?,image=? WHERE id=?;');
            $query->execute([htmlspecialchars($data['paragraph']),$files['image']['name'],$data['id']]);
        }
    }

    static function delete($id){
        parent::destroyM($id,'presentation');
    }
}