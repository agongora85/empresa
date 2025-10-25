<?php

function convertir_estatus($p){
    
    if($p=="1"){
        $respuesta="Activo";
    }else{
        $respuesta="Desactivo";
    }

    //$respuesta=($p=="1" ? "Activo":"Desactivo");
    return $respuesta;
}

function LimpiaCadena($string){
    $texto=utf8_encode($string);
    return $texto;
}

?>