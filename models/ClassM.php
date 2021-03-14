<?php 

namespace models;

class ClassM extends Model{

    static function get($id){
        return parent::getM($id,'class');
    }

    static function getByName($class_name){
        $connection=DataBase::connect();
        $query=$connection->prepare('SELECT class.year FROM class WHERE class.name=?;');
        $query->execute([$class_name]);
        return $query->fetch((\PDO::FETCH_ASSOC));
    }

    static function getCalendarId($class_name){
        $connection=DataBase::connect();
        $query=$connection->prepare('SELECT class.calendar FROM class WHERE class.name=?;');
        $query->execute([$class_name]);
        return $query->fetch((\PDO::FETCH_ASSOC));
    }

    static function getAll(){
        return parent::getAllM('class');
    }

    static function getAllWithCycle(){
        $connection=DataBase::connect();
        $query=$connection->prepare('SELECT class.id,class.name,class.year,class.calendar,year.cycle FROM class JOIN year ON class.year=year.name;');
        $query->execute();
        return $query->fetchAll((\PDO::FETCH_ASSOC));
    }

    static function new($data){
        $connection=DataBase::connect();
        $query=$connection->prepare('INSERT INTO class (name,year,calendar) VALUES (?,?,?);');
        $query->execute([$data['name'],$data['year'],$data['calendar']]);
    }

    static function update($data){
        $connection=DataBase::connect();
        $query=$connection->prepare('UPDATE class SET name=?,year=? WHERE id=?;');
        $query->execute([$data['name'],$data['year'],$data['id']]);
    }

    static function updateYear($class_name,$calendar_id){
        $connection=DataBase::connect();
        $query=$connection->prepare('UPDATE class SET calendar=? WHERE name=?;');
        $query->execute([$calendar_id,$class_name]);
    }

    static function destroy($id){
        parent::destroyM($id,'class');
    }

    static function getModules($id){
        $connection=DataBase::connect();
        $query=$connection->prepare('SELECT * FROM class_has_module JOIN module ON class_has_module.module=module.id WHERE class_has_module.class=?;');
        $query->execute([$id]);
        return $query->fetchAll((\PDO::FETCH_ASSOC));
    }
}