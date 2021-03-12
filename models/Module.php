<?php 

namespace models;

class Module extends Model{

    static function getAll(){
        return parent::getAllM('role');
    }

    static function new($data){
        $connection=DataBase::connect();
        $query=$connection->prepare('INSERT INTO module (name,year) VALUES (?,?);');
        $query->execute([$data['name'],$data['year']]);
        $query=$connection->prepare('SELECT id FROM module WHERE (name=? && year=?) ;');
        $query->execute([$data['name'],$data['year']]);
        $module_id=$query->fetch((\PDO::FETCH_ASSOC))['id'];
        $query=$connection->prepare('INSERT INTO class_has_module (class,module) VALUES (?,?);');
        $query->execute([$data['class'], $module_id]);
    }

    static function getAllByClass($class_name){
        $connection=DataBase::connect();
        $query=$connection->prepare('SELECT * FROM class_has_module 
        JOIN module ON class_has_module.module=module.id WHERE class_has_module.class=?;');
        $query->execute([$class_name]);
        return $query->fetchAll((\PDO::FETCH_ASSOC));
    }

    static function destroy($id){
        parent::destroyM($id,"module");
    }
}