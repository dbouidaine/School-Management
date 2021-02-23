<?php 

namespace models;

class User extends Model{

    static function count(){
        return Model::countM('user');
    }

    static function get($id){
        return parent::getM($id,'user');
    }
    
    static function getMany($from,$count){
        // get $count articles from the $from -th article
        $connection=DataBase::connect();
        $query=$connection->prepare('SELECT user.id,user.email,user.first_name,user.last_name,role.name AS role FROM user,role WHERE role.id = user.role ORDER BY user.created_at DESC LIMIT ?,?;');
        $query->bindParam(1,$from);
        $query->bindParam(2,$count);
        $query->execute();
        return $query->fetchAll((\PDO::FETCH_ASSOC));
    }

    static function new($data){
        print_r('here');
        $connection=DataBase::connect($data);
        $query=$connection->prepare('INSERT INTO user (email,role,first_name,last_name,password) VALUES (?,?,?,?,?);');
        $query->execute([$data['email'],$data['role'],$data['first_name'],$data['last_name'],md5($data['password'])]);
    }

    static function destroy($id){
        parent::destroyM($id,"users");
    }
}