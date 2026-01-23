<?php 

if ($_SERVER['REQUEST_METHOD'] !=  'POST') {
    // header('location: /novoleilao');
    view('/login');
    exit();
}
$id_user = 1; // temporario
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
        'data_criacao' => $data_criacao,
    ]
    // compact('matricula', 'nome', 'email', 'emailSecundario', 'usuario', 'senha', 'logradouro', 'numero', 'complemento', 'cep', 'bairro', 'cidade', 'uf', 'telefone', 'telefoneSecundario', 'pagina', 'esta_ativo', 'regular')
);


    view('index');
?>