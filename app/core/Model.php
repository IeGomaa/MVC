<?php

namespace IeCourse\core;
use Ibrahim\MysqliDatabaseWrapper\MysqlDriver;
class Model {
    public static function dbConnection() {
        return new MysqlDriver('www.ieCourse.com','root','','iecourse');
    }
}