<?php 

namespace models;

class Contact extends Model{

    static function get($id){
        return parent::getM($id,'contact');
    }


    static function getAll(){
        return parent::getAllM('contact');
    }

    static function update($data){
        $connection=DataBase::connect();
        $query=$connection->prepare('UPDATE contact SET contact=?,type=? WHERE id=?;');
        $query->execute([$data['contact'],$data['type'],$data['id']]);
    }

    static function new($data){
        $connection=DataBase::connect();
        $query=$connection->prepare('INSERT INTO contact (contact,type) VALUES (?,?);');
        $query->execute([htmlspecialchars($data['contact']),$data['type']]);
    }

    static function destroy($id){
        parent::destroyM($id,'contact');
    }

}