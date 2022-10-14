<?php

namespace IeCourse\models;
use IeCourse\core\Model;

class Content {
    public static function getAllContent() {
        return Model::dbConnection()
            ->select()
            ->columns('`content`.*,`category`.`name` AS `category_name`')
            ->table('content')
            ->join('category')
            ->on('content','category_id','category','id')
            ->execute()
            ->fetchAll();
    }

    public static function insert($data) {
        return Model::dbConnection()
            ->insUp('INSERT INTO','content',$data)
            ->execute();
    }

    public static function delete($id) {
        return Model::dbConnection()
            ->delete('content')
            ->where()
            ->operations('id','=',$id)
            ->execute();
    }

    public static function getContent($id) {
        return Model::dbConnection()
            ->select()
            ->columns('*')
            ->table('content')
            ->where()
            ->operations('id','=',$id)
            ->execute()
            ->fetch();
    }

    public static function update($id,$data) {
        return Model::dbConnection()
            ->insUp('UPDATE','content',$data)
            ->where()
            ->operations('id','=',$id)
            ->execute();
    }

    public static function getContentByCategoryId($id) {
        return Model::dbConnection()
            ->select()
            ->columns('name')
            ->table('content')
            ->where()
            ->operations('category_id','=',$id)
            ->execute()
            ->fetchAll();
    }

}
