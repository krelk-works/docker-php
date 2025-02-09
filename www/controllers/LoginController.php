<?php

Class LoginController {
    public function login() {
        require_once 'views/login/login.php';
    }

    public function logout() {
        session_destroy();
        unset($_SESSION['user']);
        echo '<meta http-equiv="Refresh" content="0; url=../?controller=LoginController&action=login">';
    }

    public function auth() {
        require_once 'models/user.php';
        $user = new User();
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = $user->getUserByUsername($username);
        if ($user) {
            if (password_verify($password, $user['password'])) {

                // Detectamos si la sesión ya está iniciada
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }
                $_SESSION['user'] = $user;
                echo '<meta http-equiv="Refresh" content="0; url=../">';
            } else {
                echo "Invalid password";
            }
        } else {
            echo "User not found or invalid password -> <a href='?controller=LoginController&action=login'>Try again</a>";
        }
    }
}