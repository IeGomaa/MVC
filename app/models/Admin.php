<?php

namespace IeCourse\models;

use IeCourse\core\Model;

class Admin {
    public static function checkData($email,$password) {
        return Model::dbConnection()
            ->select()
            ->columns('*')
            ->table('admin')
            ->where()
            ->operations('email','=',$email)
            ->and()
            ->operations('password','=',$password)
            ->execute()
            ->fetch();
    }
}