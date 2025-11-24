<?php
function dd(...$dump){
    echo '<pre>';
    var_dump($dump);
    echo '</pre>';

    die();
}

function view($view, $data = []){
    foreach( $data as $key => $value ){

        $$key = $value;
    }
    // require "views/{$view}.view.php";
    require "views/template/app.php";
}

function abortar($code){
    http_response_code($code);

    view($code);

    // require "views/{$code}.view.php";
    // echo"Página não existe";
    die();
}

function flash(){
    return new Flash;
}

function auth(){
    if(!isset($_SESSION['auth'])){
        return null;
    }

    return $_SESSION['auth'];
}
?>