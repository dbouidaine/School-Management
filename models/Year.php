<?php 

namespace models;

class Year extends Model{

    static function getAll(){
        return parent::getAllM('year');
    }
}