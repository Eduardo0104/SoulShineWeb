<?php

namespace App\Models;

use Core\Database;
use Core\Request;
//Create, read, update, delete 

Class user {

    public function SelUser(Request $request) 
    {
        $db = Database::getInstance();
        $user = $request->getParams();
        $user = $user['get'];
        var_dump($user);
        $condition = ['password_User'=> 'BQT12DXB1ZQ'];
        $logSelect = $db->getList('users', 'password_User',$condition);
        $tempSelect = $_POST['temp_Id'];
        return $logSelect;
    }
    public function upUser() : array
    {
        $db = Database::getInstance();
        $logUpdate = $db->update('users','','');
        //string $table, array $data, array $condition
        $tempUpdate = $_POST['temp_Up'];
        return $logUpdate;

    }
    public function delUser() : array
    {
        $db = Database::getInstance();
        $logDelete = $db->delete('users','','');
        //string $table, array $condition

        return $logDelete;
    }
    public function crUser() : array
    {
        $db = Database::getInstance();
        $logInsert = $db->insert('users','','');
        //string $table, array $data

        return $logInsert;
    }
    
}
//select users from password_User where 

