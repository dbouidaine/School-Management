<?php 

namespace models;

class User extends Model{

    static function count(){
        return Model::countM('user');
    }

    static function get($id){
        return parent::getM($id,'user');
    }
    static function getCycle($class){
        $connection=DataBase::connect();
        $query=$connection->prepare('SELECT class.name AS class_name,class.calendar AS calendar_id,class.year AS year_name,year.cycle
        AS cycle_name FROM class,year WHERE (class.year=year.name && class.name=?);');
        $query->bindParam(1,$class);
        $query->execute();
        return $query->fetch((\PDO::FETCH_ASSOC));

    }
    static function getByEmail($email){
        $connection=DataBase::connect();
        $query=$connection->prepare('SELECT user.id,user.email,role.name AS role,user.first_name,user.last_name,user.password FROM user,role WHERE user.role=role.id && email=? ;');
        $query->bindParam(1,$email);
        $query->execute();
        return $query->fetch((\PDO::FETCH_ASSOC));
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
        $connection=DataBase::connect();
        $query=$connection->prepare('INSERT INTO user (email,role,first_name,last_name,password) VALUES (?,?,?,?,?);');
        $query->execute([$data['email'],$data['role'],$data['first_name'],$data['last_name'],md5($data['password'])]);
    }

    static function update($data){
        $connection=DataBase::connect();
        if (empty($data['password'])){
            $query=$connection->prepare('UPDATE user SET email=?,first_name=?,last_name=?,role=? WHERE id=?;');
            $query->execute([$data['email'],$data['first_name'],$data['last_name'],$data['role'],$data['id']]);
        }
        else{
            $query=$connection->prepare('UPDATE user SET email=?,first_name=?,last_name=?,password=?,role=? WHERE id=?;');
            $query->execute([$data['email'],$data['first_name'],$data['last_name'],md5($data['password']),$data['role'],$data['id']]);
        }
        
    }

    static function destroy($id){
        parent::destroyM($id,'user');
    }

    static function getMarks($id,$class){
        $connection=DataBase::connect();
        $query=$connection->prepare('SELECT class_has_module.class AS class_name, 
        module.id AS module_id,
        module.name AS module_name,
        student_has_mark.student AS student_id,
        student_has_mark.mark 
        FROM class_has_module 
        JOIN module ON class_has_module.module=module.id 
        JOIN student_has_mark ON student_has_mark.module=module.id 
        WHERE student_has_mark.student=? 
        && class_has_module.class=? ;');
        $query->execute([$id,$class]);
        return $query->fetchAll((\PDO::FETCH_ASSOC));
    }

    static function getActivities($id){
        $connection=DataBase::connect();
        $query=$connection->prepare('SELECT * FROM student_has_activity WHERE student=? ;');
        $query->execute([$id]);
        return $query->fetchAll((\PDO::FETCH_ASSOC));
    }

    static function getChildren($id){
        $connection=DataBase::connect();
        $query=$connection->prepare('SELECT * FROM user JOIN parent_has_child 
        ON parent_has_child.child=user.id WHERE parent_has_child.parent=? ;');
        $query->execute([$id]);
        return $query->fetchAll((\PDO::FETCH_ASSOC));
    }

    static function getRemarks($id){
        $connection=DataBase::connect();
        $query=$connection->prepare('SELECT phc.child AS child_id,
        child.first_name AS child_first_name,
        child.last_name AS child_last_name,
        teacher.first_name AS teacher_first_name,
        teacher.last_name AS teacher_last_name,
        shr.remark
        FROM parent_has_child AS phc 
        JOIN user AS child 
        ON phc.child=child.id 
        JOIN student_has_remark AS shr 
        ON shr.student=child.id 
        JOIN user AS teacher 
        ON shr.teacher=teacher.id
        WHERE phc.parent=?;');
        $query->execute([$id]);
        return $query->fetchAll((\PDO::FETCH_ASSOC));
    }
}