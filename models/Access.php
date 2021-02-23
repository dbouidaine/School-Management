<?php 

namespace models;

class Access extends Model{


    static function get($id){
        // get an article by id
        $connection=DataBase::connect();
        $query=$connection->prepare('SELECT * FROM article WHERE id=?;');
        $query->bindParam(1,$id);
        $query->execute();
        return $query->fetch((\PDO::FETCH_ASSOC));
    }

    static function hasAccess($role,$permission){
        $connection=DataBase::connect();
        $query=$connection->prepare("SELECT * FROM role_has_permission WHERE (role_name=? && permission_name=?) ;");
        $query->bindParam(1,$role);
        $query->bindParam(2,$permission);
        $query->execute();
        if (!empty($query->fetch(\PDO::FETCH_ASSOC))) {return true;}
        return false;
        
    }

    static function delete($id){
        parent::destroyM($id,"role_has_permission");
    }
}