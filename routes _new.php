<?php

// Pega o caminho da URL após o domínio
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

// Remove barras iniciais e finais para obter a rota limpa
$rota = trim($path, "/");

// Se a rota estiver vazia (acesso à raiz), define como 'index'
$controller = $rota ?: "index";

if (!file_exists("controllers/{$controller}.controller.php")) {
    abortar(404);
}

require "controllers/{$controller}.controller.php";