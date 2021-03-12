<?php 

namespace models;
use app\Router;

class Access extends Model{


    static function get($id){
        // get an article by id
        $connection=DataBase::connect();
        $query=$connection->prepare('SELECT * FROM article WHERE id=?;');
        $query->bindParam(1,$id);
        $query->execute();
        return $query->fetch((\PDO::FETCH_ASSOC));
    }

    static function hasAccess($permission){
        if(!isset($_SESSION['user'])) {
            header('Location: '.url('login'));
            die();
        }
        $role=$_SESSION['user']['role'];
        $connection=DataBase::connect();
        $query=$connection->prepare("SELECT * FROM role_has_permission WHERE (role_name=? && permission_name=?) ;");
        $query->bindParam(1,$role);
        $query->bindParam(2,$permission);
        $query->execute();
        if (empty($query->fetch(\PDO::FETCH_ASSOC))) {
            Router::redirect("errors/403");
            die();
        }
        else {return true;}
    }

    static function parentOf($id_child){
        $id_parent=$_SESSION['user']['id'];
        $connection=DataBase::connect();
        $query=$connection->prepare("SELECT * FROM parent_has_child WHERE (parent=? && child=?) ;");
        $query->bindParam(1,$id_parent);
        $query->bindParam(2,$id_child);
        $query->execute();
        if (empty($query->fetch(\PDO::FETCH_ASSOC))) {
            Router::redirect("errors/403");
            die();
        }
        else {return true;}
    }

    static function delete($id){
        parent::destroyM($id,"role_has_permission");
    }
}