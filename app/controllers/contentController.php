<?php

namespace IeCourse\controllers;
use IeCourse\core\Helper;
use IeCourse\models\Category;
use IeCourse\models\Content;
use Rakit\Validation\Validator;

class contentController {

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
        $path = DS . 'back' . DS . 'content' . DS . 'index.php';
        $this->data['content'] = Content::getAllContent();

        Helper::view($path,$this->data);
    }

    public function insert() {
        $path = DS . 'back' . DS . 'content' . DS . 'insert.php';
        Helper::view($path,$this->data);
    }

    public function checkData() {
        $validator = new Validator;
        $validation = $validator->make($_POST + $_FILES, [
            'name'                  => 'required',
            'mainContent'           => 'required',
            'description'           => 'required',
            'cover'                 => 'required'
        ]);

        $validation->validate();

        if ($validation->fails()) {
            header('Location: insert');
        } else {
            $name = $_POST['name'];
            $mainContent = $_POST['mainContent'];
            $description = addslashes($_POST['description']);
            $tmp_name = $_FILES['cover']['tmp_name'];
            $extinction = explode('/',$_FILES['cover']['type']);
            $extinction = end($extinction);
            $category = $_POST['category'];

            $imageName = Helper::handelImageName($name,$extinction);
            move_uploaded_file($tmp_name,'upload' . DS . $imageName);
            $data = [
                'name' => $name,
                'main_content' => $mainContent,
                'description' => $description,
                'cover' => $imageName,
                'category_id' => $category
            ];

            Content::insert($data);
            header('Location: index');

        }
    }

    public function update() {
        $id = $_POST['id'];
        $data = Content::getContent($id);
        $path = DS . 'back' . DS . 'content' . DS . 'update.php';

        $data = [
            'id'    => $data['id'],
            'name' => $data['name'],
            'mainContent' => $data['main_content'],
            'description' => $data['description']
        ];

        $this->data = array_merge($this->data,$data);
        Helper::view($path,$this->data);

    }

    public function edit() {
        $validator = new Validator;
        $validation = $validator->make($_POST + $_FILES, [
            'name'                  => 'required',
            'mainContent'           => 'required',
            'description'           => 'required',
            'cover'                 => 'required'
        ]);

        $id = $_POST['id'];
        $validation->validate();
        if ($validation->fails()) {
            $this->update();
        } else {
            $mainContent = $_POST['mainContent'];
            $name = $_POST['name'];
            $tmp_name = $_FILES['cover']['tmp_name'];
            $description = addslashes($_POST['description']);
            $extinction = explode('/',$_FILES['cover']['type']);
            $extinction = end($extinction);
            $category = $_POST['category'];

            $imageName = Helper::handelImageName($name,$extinction);
            move_uploaded_file($tmp_name,'upload' . DS . $imageName);

            $content = Content::getContent($id);
            $image = 'upload/' . $content['cover'];
            Helper::unlinkImage($image);

            $data = [
                'name' => $name,
                'main_content' => $mainContent,
                'description' => $description,
                'cover' => $imageName,
                'category_id' => $category
            ];

            Content::update($id,$data);
            header('Location: index');
        }
    }

    public function delete() {
        $id = $_POST['id'];
        $content = Content::getContent($id);
        $image = 'upload/' . $content['cover'];
        Helper::unlinkImage($image);
        Content::delete($id);
        header('Location: index');

    }

}