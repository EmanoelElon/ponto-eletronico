<?php
// Pega apenas o caminho da URL
$path = parse_url($_SERVER['REQUEST_URI'])['path'];

// Se a aplicação estiver em /ponto/, removemos isso da string para pegar a rota real
$rota = str_replace('/ponto/', '', $path);
$rota = trim($rota, '/');

// Se a rota estiver vazia, define como index
$controller = $rota ?: 'index';

if (!file_exists("controllers/{$controller}.controller.php")) {
    abortar(404);
}

require "controllers/{$controller}.controller.php";