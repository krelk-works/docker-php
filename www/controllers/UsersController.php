<?php

require_once "models/user.php";

Class UsersController {
    private $model;

    public function __construct() {
        $this->model = new User();
    }

    public function index() {
        $users = $this->model->getUsers();
        require_once "views/users/index.php";
    }

    public function create() {
        require_once "views/users/create.php";
    }

    public function store() {
        $name = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $this->model->storeUser($name, $email, $password);
        echo '<meta http-equiv="Refresh" content="0; url=../">';
    }

    public function edit() {
        $id = $_GET['id'];
        $user = $this->model->getUser($id);
        require_once "views/users/edit.php";
    }

    public function update() {
        $id = $_POST['id'];
        $name = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $this->model->updateUser($id, $name, $email, $password);
        echo '<meta http-equiv="Refresh" content="0; url=../">';
    }

    public function delete() {
        $id = $_GET['id'];
        $this->model->deleteUser($id);
        echo '<meta http-equiv="Refresh" content="0; url=../">';
    }

    public function search() {
        $name = $_POST['username'];
        $users = $this->model->searchUser($name);
        require_once "views/users/index.php";
    }
}