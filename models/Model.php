<?php

namespace models;

class Model{
    
    static function destroy($id,$table){
        $connection=DataBase::connect();
        $query=$connection->prepare('DELETE FROM '.$table.' WHERE id=?;');
        $query->bindParam(1,$id);
        $query->execute();
    }

}