<?php

//estoque/mostrar

$url = 'http://127.0.0.1/mesa-projetinhos/filial';

$classe = 'estoque';
$metodo = 'mostrar';

$montar = $url.'/'.$classe.'/'.$metodo; 


$retorno = file_get_contents($montar);

var_dump(json_decode($retorno, true));