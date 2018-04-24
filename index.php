<?php
//error_reporting(E_ALL);
session_start();
date_default_timezone_set('America/Santiago');//or change to whatever timezone you want

//INCLUDES////////////////////////////////////////
//#VALIDACIONES
require_once('./validar/validarEntrada.php');

//#UTILS
//require_once('./class/util/util.class.php');
//require_once('./class/util/email.class.php');

//#MODELO
//require_once('./class/datos/cnn.class.php');
//require_once('./class/datos/AgenteDatos.class.php');



//#CONTROLADORES
require_once('./class/controller/Inicio.class.php');

isset($_POST['funcion'])==true?$funcion=$_POST['funcion']:$funcion='';
 #Enrutamiento 
 $map = array(
     //SIDEBAR
     'formInicio' => array('class'=>'./class/controller/Inicio.class.php' ,'controller' =>'FormularioInicio', 'action' =>'formMostrar'),
     //MMPP
     'MMPP' => array('class'=>'./class/controller/MMPP.class.php' ,'controller' =>'MMPP', 'action' =>$funcion.'MMPP'),
     //Reportes
     'Reportes' => array('class'=>'./class/controller/Reportes.class.php' ,'controller' =>'Reportes', 'action' =>$funcion.'Reportes'),
 );
  

    #Parseo de la ruta
    if (!isset($accion) && !isset($_POST['accionJquery'])) {
       $accion = 'formInicio';
    }else if(isset($_POST['accionJquery'])){
        $accion = $_POST['accionJquery'];
    }

    if (isset($map[$accion])) {
       $ruta = $accion;
    } 
    else {
       header('Status: 404 Not Found');
       echo '<html><body><h1>Error 404: No existe la ruta.... <i>' .
            $accion .'</p></body></html>';
        exit;
    }

    $controlador = $map[$ruta];
    #var_dump($controlador);exit;
    
    #Ejecución del controlador asociado a la ruta

    require_once $controlador['class'];

    if (method_exists($controlador['controller'],$controlador['action']) && isset($_SESSION['entroOkLogin'])) {
        call_user_func(array(new $controlador['controller'], $controlador['action']));
    } 
    else {
        header('Status: 404 Not Found');
        echo '<html><body><h1>Error 404: El controlador <i>' .
        $controlador['controller'] .
        '->' .
        $controlador['action'] .
        '</i> no existe!!!</h1></body></html>';
    }
?>