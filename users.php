<?php

include '../app/database/db.php';

//$checkSubmit = false;

$ErrorMessage = '';

//$isRegistered = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['registr'])) {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
//    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $admin = 0;

    if ($username === "" || $email === "" || $password === "") {
        $ErrorMessage = 'Не все поля заполнены!';
    }
    elseif (strlen($username) < 3) {
        $ErrorMessage = "Слишком короткое имя пользователя";
    }
    else{
        $post = [
            'admin' => $admin,
            'username' => $username,
            'email' => $email,
            'password' => $password,
        ];

        //$checkSubmit = true;
        $id = createUser('users', $post);
        echo $id;
        //Test($post);
        $username = SelectOne('users', $post);

        $_SESSION['id'] = $username['id'];
        $_SESSION['username'] = $username['username'];
        $_SESSION['admin'] = $username['admin'];
        header('Location: index.php');
        //Test($_SESSION);
        //exit();



    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['log'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    if ($email === "" || $password === "") {
        $ErrorMessage = 'не все поля заполнены';
    } else{
        $existingUser = SelectOne('users', ['email' => $email]);
        Test($existingUser);
    }

}







