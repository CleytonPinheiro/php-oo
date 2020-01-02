<?php

spl_autoload_register(function (string $nomeCompletoClasse){
    //Alura/Banco/Modelo/Endereco
    //src/Modelo/Endereco.php
    $caminhoArquivo = str_replace('Alura\\Banco','src', $nomeCompletoClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= ".php";

    if (file_exists($caminhoArquivo)){
        require_once $caminhoArquivo;
    }
});

