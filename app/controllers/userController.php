<?php

namespace IeCourse\controllers;

use IeCourse\core\Helper;
use IeCourse\models\Category;
use IeCourse\models\Content;

class userController {

    private $categories;
    private $courses;
    private $data;

    public function __construct()
    {
        $this->categories = Category::getAllCategory();
        foreach ($this->categories as $category) {
            $id = $category['id'];
            $this->courses[$category['name']] = Content::getContentByCategoryId($id);
        }
        $this->data = [
            'categories' => $this->categories,
            'title' => $this->courses
        ];

    }

    public function index() {
        $path = DS . 'front' . DS . 'index.php';
        $data = [
            'categories' => Category::getAllCategory(),
            'content' => Content::getAllContent()
        ];

        $data = array_merge($this->data,$data);
        Helper::view($path,$data);
    }

    public function single() {
        $path = DS . 'front' . DS . 'single.php';
        $data = Content::getContent($_GET['id']);
        $data = array_merge($data,$this->data);
        Helper::view($path,$data);
    }

}