<?php
header('Access-Control-Allow-Origin: *');
// header("Content-type: application/json; charset=utf-8");

header('Content-Type: application/josn; charset=utf-8');

require_once "classes/estoque.php";


class Rest {

    public static function open($requisicao){
        
        $url = explode('/',  $requisicao['url'] );

        $class = ucfirst($url[0]); // valor da minha classs
        array_shift($url); //eliminar o primeiro geristro do meu array

        $metodo = $url[0]; // valor da minha metodo
        array_shift($url); //eliminar o primeiro geristro do meu array

        $paramentros = array();// paramentro recebe um array vazio
        $paramentros = $url; 
        
        if(class_exists($class)){ //verificacao se class exite 
            if(method_exists($class, $metodo)){  //verificar se o metodo existe
                $retorno =  call_user_func_array(array(new $class, $metodo), $paramentros);
                return json_encode(array('status' => 'sucesso', 'dados' => $retorno));
            }else{
                return json_encode(array('status' => 'erro', 'dados' => 'Metodo inexistente'));
            }
        }else{
            return json_encode(array('status' => 'erro', 'dados' => 'Classe inexistente'));
        }
    }
    
}

if (isset($_REQUEST)) {
    echo Rest::open($_REQUEST);
}


