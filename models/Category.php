<?php 

namespace models;

class Category extends Model{

    static function getAll(){
        return parent::getAllM('category');
    }
}