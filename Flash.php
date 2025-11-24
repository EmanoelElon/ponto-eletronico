<?php
class Flash{
    public function push($chave, $valor){
        $_SESSION["flash_$chave"] = $valor;

    }

    public function get($chave){
        $valor = $_SESSION["flash_$chave"];

        return $valor;
    }
}
?>