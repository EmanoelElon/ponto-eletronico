<?php
if (!auth()) {

    header('location: login');
    exit();
}

// if($_GET['submit'] === false){
//     // var_dump($_POST);
//     view('/index');
//     exit();
// }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // view('/index');
    // header('location: index');

    // date_default_timezone_set('UTC');
    date_default_timezone_set('America/Sao_Paulo');

    $id_user = $_SESSION['auth']->id; // temporario
    $dia = date('d');
    $mes = date('m');
    $ano = date('Y');
    $hora = date('H:i:s');
    $data_criacao = date('Y-m-d');

    $dbInstance = new DB($config['database']);

    $dbInstance->query(
        "insert into tb_point(id_user, dia, mes, ano, hora) values (:id_user, :dia, :mes, :ano, :hora)",
        Point::class,
        [
            'id_user' => $id_user,
            'dia' => $dia,
            'mes' => $mes,
            'ano' => $ano,
            'hora' => $hora,
        ]
    );

    exit();
}




view('index');
