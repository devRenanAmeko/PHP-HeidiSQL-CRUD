<?php

// dados de ligação
$database = 'loja_web';
$username = 'user_loja_web';
$password = ''; //hash heidisql

// ligação
$ligacao = new PDO("mysql:host=localhost;dbname=$database;charset=utf8", $username, $password);

// carregar os dados (em formato de array de objetos)
$resultados = $ligacao->query("SELECT * FROM clientes LIMIT 20")->fetchAll(PDO::FETCH_OBJ);

// fechar a ligação
$ligacao = null;

