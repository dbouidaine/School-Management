<?php 

namespace models;

class Calendar extends Model{

    static function get($calendar_id){
        $connection=DataBase::connect();
        $query=$connection->prepare('SELECT calendar_has_event.id,
        calendar_has_event.calendar,
        calendar_has_event.event,
        calendar_has_event.day,
        calendar_has_event.start,
        calendar_has_event.finish,
        module.id AS module_id,
        module.name AS module_name
        FROM calendar_has_event,module WHERE 
        calendar_has_event.calendar=? && module.id=calendar_has_event.event ORDER BY
        calendar_has_event.day,calendar_has_event.start ASC;');
        $query->bindParam(1,$calendar_id);
        $query->execute();
        return $query->fetchAll((\PDO::FETCH_ASSOC));
    }

    static function countHours($calendar_id){
        $connection=DataBase::connect();
        $query=$connection->prepare('SELECT MIN(START) AS min,MAX(finish) AS max FROM calendar_has_event WHERE calendar=?;');
        $query->bindParam(1,$calendar_id);
        $query->execute();
        return $query->fetch((\PDO::FETCH_ASSOC));
    }
}