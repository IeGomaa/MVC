<?php

namespace IeCourse\controllers;

use IeCourse\core\Helper;
use IeCourse\models\Category;
use IeCourse\models\Content;
use Rakit\Validation\Validator;

class categoryController {
    private $categories;
    private $courses;
    private $data;

    public function __construct()
    {
        session_start();
        if (isset($_SESSION['admin']) && !empty($_SESSION['admin'])) {
            $this->categories = Category::getAllCategory();
            foreach ($this->categories as $category) {
                $id = $category['id'];
                $this->courses[$category['name']] = Content::getContentByCategoryId($id);
            }

            $this->data = [
                'admin' => $_SESSION['admin'],
                'categories' => $this->categories,
                'title' => $this->courses
            ];
        } else {
            header('Location: ' . PUBLIC_PATH);
        }
    }

    public function index() {
        $path = DS . 'back' . DS . 'category' . DS . 'index.php';
        Helper::view($path,$this->data);
    }

    public function insert() {
        $path = DS . 'back' . DS . 'category' . DS . 'insert.php';
        Helper::view($path,$this->data);
    }

    public function checkData() {
        $validator = new Validator;
        $validation = $validator->make($_POST, [
            'name'                 => 'required'
        ]);

        $validation->validate();
        if ($validation->fails()) {
            header('Location: insert');
        } else {
            $name = $_POST['name'];
            $val = Category::checkData($name);

            if (is_null($val)) {
                Category::insert($name);
                header('Location: index');
            } else {
                header('Location: insert');
            }

        }
    }

    public function update() {
        $id = $_POST['id'];
        $data = Category::getCategory($id);
        $path = DS . 'back' . DS . 'category' . DS . 'update.php';

        $data = [
            'id'    => $data['id'],
            'name' => $data['name']
        ];

        $this->data = array_merge($this->data,$data);
        Helper::view($path,$this->data);

    }

    public function edit() {
        $validator = new Validator;
        $validation = $validator->make($_POST, [
            'name'                 => 'required'
        ]);

        $id = $_POST['id'];
        $validation->validate();
        if ($validation->fails()) {
            $this->update();
        } else {
            $name = $_POST['name'];
            Category::update($id,$name);
            header('Location: index');
        }
    }

    public function delete() {
        $id = $_POST['id'];
        Category::delete($id);
        header('Location: index');
    }

}