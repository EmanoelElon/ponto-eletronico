<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $user = (new DB($config['database']))->query(
        'SELECT * FROM tb_users WHERE username = :username',
        User::class,
        [':username' => $username],
    )->fetch();

    if ($user) {
        // For demonstration purposes only. Use password hashing in production.
        $_SESSION['auth'] = $user;
        header('Location: /index');
        exit;
    } else {
        $error = 'Invalid username or password';
    }

    // if($user){
    //     // For demonstration purposes only. Use password hashing in production.
    //     if($user->senha === $password) {
    //         $_SESSION['user_id'] = $user->id;
    //         header('Location: /index');
    //         exit;
    //     } else {
    //         $error = 'Invalid username or password';
    //     }
    // } else {
    //     $error = 'Invalid username or password';
    // }

    // if($user && password_verify($password, $user->senha)) {
    //     $_SESSION['user_id'] = $user->id;
    //     header('Location: /index');
    //     exit;
    // } else {
    //     $error = 'Invalid username or password';
    // }
}

view('login');
