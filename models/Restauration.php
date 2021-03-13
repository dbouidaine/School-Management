<?php 

namespace models;

class Restauration extends Model{

    static function get($id){
        return parent::getM($id,'restauration');
    }


    static function getAll(){
        return parent::getAllM('restauration');
    }

    static function update($data){
        $connection=DataBase::connect();
        $query=$connection->prepare('UPDATE restauration SET starter=?,main=?,dessert=? WHERE id=?;');
        $query->execute([$data['starter'],$data['main'],$data['dessert'],$data['id']]);
    }

}