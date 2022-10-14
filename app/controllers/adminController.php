<?php

namespace IeCourse\controllers;

use IeCourse\core\Helper;
use IeCourse\models\Admin;
use IeCourse\models\Category;
use IeCourse\models\Content;
use Rakit\Validation\Validator;

class adminController {

    private $categories;
    private $courses;
    public function __construct()
    {
        session_start();
        $this->categories = Category::getAllCategory();
        foreach ($this->categories as $category) {
            $id = $category['id'];
            $this->courses[$category['name']] = Content::getContentByCategoryId($id);
        }
    }

    public function login() {
        $path = DS . 'back' . DS . 'login.php';
        Helper::view($path);
    }

    public function checkData() {
        $validator = new Validator;
        $validation = $validator->make($_POST, [
            'email'                 => 'required|email',
            'password'              => 'required|min:3'
        ]);

        $validation->validate();

        if ($validation->fails()) {
            header('Location: login');
        } else {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $val = Admin::checkData($email,$password);

            if (!is_null($val)) {
                $_SESSION['admin'] = $val['name'];
                header('Location: index');
            } else {
                header('Location: login');
            }

        }

    }

    public function index() {
        if (isset($_SESSION['admin']) && !empty($_SESSION['admin'])) {
            $path = DS . 'back' . DS . 'index.php';

            $admin = [
                'admin' => $_SESSION['admin'],
                'categories' => $this->categories,
                'title' => $this->courses
                ];
            Helper::view($path,$admin);
        } else {
            header('Location: login');
        }
    }

    public function logout() {
        session_destroy();
        header('Location: login');
    }

}