<?php

session_start();


//dirige al usuario a la URL establecida en la funcioin getUrl
function redirect($url){
    echo "<script type='text/javascript'>"
        ."window.location.href='$url'"
        ."</script>";
}

function dd($var){
    echo"<pre>";
    die(print_r($var));
}

function getUrl($modulo,$controlador,$funcion,$parametros=false,$pagina=false){

        //no me acuerdo para que es el parametro

    if($pagina==false){
        $pagina="index";
    }

    $url="$pagina.php?modulo=$modulo&controlador=$controlador&funcion=$funcion";

    if($parametros!=false){
        foreach($parametros as $key => $valor){
            $url.="&$key=$valor";
        }
    }


    return $url;
}

function resolve(){
    $modulo=ucwords($_GET['modulo']);
    $controlador=ucwords($_GET['controlador']);
    $funcion=$_GET['funcion'];

    if(is_dir("../controller/$modulo")){  //valida si la carpeta-mmodulo existe


        if(file_exists("../controller/$modulo/".$controlador."Controller.php")){
            //valida si el archivo controllador existe
            include_once "../controller/$modulo/".$controlador."Controller.php";
            $nombreClase=$controlador."Controller";
            $objeClase=new $nombreClase();
            if(method_exists($objeClase,$funcion)){
                $objeClase->$funcion();
            }else{
                echo "La función especificada no existe";
            }
        }else{
            echo "El controlador especificado no existe";
        }
    }else{
        echo "el modulo expecificado no existe";
    }
}


?>