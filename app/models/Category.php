<?php

namespace IeCourse\models;
use IeCourse\core\Model;

class Category {
    public static function getAllCategory() {
        return Model::dbConnection()
            ->select()
            ->columns('*')
            ->table('category')
            ->execute()
            ->fetchAll();
    }

    public static function getCategory($id) {
        return Model::dbConnection()
            ->select()
            ->columns('*')
            ->table('category')
            ->where()
            ->operations('id','=',$id)
            ->execute()
            ->fetch();
    }

    public static function checkData($name) {
        return Model::dbConnection()
            ->select()
            ->columns('*')
            ->table('category')
            ->where()
            ->operations('name','=',$name)
            ->execute()
            ->fetch();
    }

    public static function insert($name) {
        $category = ['name' => $name];
        return Model::dbConnection()
            ->insUp('INSERT INTO','category',$category)
            ->execute();
    }

    public static function update($id,$name) {
        $category = ['name' => $name];
        return Model::dbConnection()
            ->insUp('UPDATE','category',$category)
            ->where()
            ->operations('id','=',$id)
            ->execute();
    }

    public static function delete($id) {
        return Model::dbConnection()
            ->delete('category')
            ->where()
            ->operations('id','=',$id)
            ->execute();
    }

}