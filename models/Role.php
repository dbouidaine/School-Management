<?php 

namespace models;

class Role extends Model{

    static function getAll(){
        return parent::getAllM('role');
    }
}