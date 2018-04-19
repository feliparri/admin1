<?php
error_reporting(E_ALL);
session_start();
session_name('adminDesarrollo');
date_default_timezone_set('America/Santiago');//or change to whatever timezone you want

//INCLUDES////////////////////////////////////////
//#VALIDACIONES
require_once('./validar/validarEntrada.php');

//#UTILS
require_once('./class/util/util.class.php');
require_once('./class/util/email.class.php');

//#MODELO
require_once('./class/datos/cnn.class.php');
require_once('./class/datos/AgenteDatos.class.php');
require_once('./class/datos/MonitorDatos.class.php');
require_once('./class/datos/UsuarioDatos.class.php');
require_once('./class/datos/ModuloDatos.class.php');
require_once('./class/datos/ReclutamientoDatos.class.php');
require_once('./class/datos/ReclutadoDatos.class.php');
require_once('./class/datos/ContactoDatos.class.php');
require_once('./class/datos/PantallaDatos.class.php');
require_once('./class/datos/parametros.class.php');

//#CONTROLADORES
require_once('./class/controller/Inicio.class.php');

isset($_POST['funcion'])==true?$funcion=$_POST['funcion']:$funcion='';
 #Enrutamiento 
 $map = array(
     //SIDEBAR
     'formInicio' => array('class'=>'./class/controller/Inicio.class.php' ,'controller' =>'FormularioInicio', 'action' =>'formMostrar'),
     
     //MONITOR
     'Monitor' => array('class'=>'./class/controller/Monitor.class.php' ,'controller' =>'Monitor', 'action' =>$funcion.'Monitor'),
     
     //USUARIO
     'Usuario' => array('class'=>'./class/controller/Usuario.class.php' ,'controller' =>'Usuario', 'action' =>$funcion.'Usuario'),
     
     //AGENTE
     'Agente' => array('class'=>'./class/controller/Agente.class.php' ,'controller' =>'Agente', 'action' =>$funcion.'Agente'),
     
     //RECLUTAMIENTO
     'Reclutamiento' => array('class'=>'./class/controller/Reclutamiento.class.php' ,'controller' =>'Reclutamiento', 'action' =>$funcion.'Reclutamiento'), 
     
     //RECLUTADO
     'Reclutado' => array('class'=>'./class/controller/Reclutado.class.php' ,'controller' =>'Reclutado', 'action' =>$funcion.'Reclutado'), 
     
     //CONTACTO
     'Contacto' => array('class'=>'./class/controller/Contacto.class.php' ,'controller' =>'Contacto', 'action' =>$funcion.'Contacto'), 
     
     //HORA EXTRA
     'HoraExtra' => array('class'=>'./class/controller/HoraExtra.class.php' ,'controller' =>'HoraExtra', 'action' =>$funcion.'HoraExtra'),  
     
     //WEBSERVICE ROMANOVA
     'WsRomanova' => array('class'=>'./class/controller/WsRomanova.class.php' ,'controller' =>'WsRomanova', 'action' =>$funcion.'WsRomanova'), 
     
     //PANTALLA
     'Pantalla' => array('class'=>'./class/controller/Pantalla.class.php' ,'controller' =>'Pantalla', 'action' =>$funcion.'Pantalla'), 
     
     //ANTICIPO
     'Anticipo' => array('class'=>'./class/controller/Anticipo.class.php' ,'controller' =>'Anticipo', 'action' =>$funcion.'Anticipo'), 
     
     //ANTICIPO SUPERVISOR
     'AnticipoSupervisor' => array('class'=>'./class/controller/AnticipoSupervisor.class.php' ,'controller' =>'AnticipoSupervisor', 'action' =>$funcion.'AnticipoSupervisor'), 
     
     //VACACIONES SUPERVISOR
     'VacacionesSupervisor' => array('class'=>'./class/controller/VacacionesSupervisor.class.php' ,'controller' =>'VacacionesSupervisor', 'action' =>$funcion.'VacacionesSupervisor'), 
     
     //ANTICIPO
     'AnticipoJP' => array('class'=>'./class/controller/AnticipoJP.class.php' ,'controller' =>'AnticipoJP', 'action' =>$funcion.'AnticipoJP'), 
     
     //VACACIONES
     'VacacionesJP' => array('class'=>'./class/controller/VacacionesJP.class.php' ,'controller' =>'VacacionesJP', 'action' =>$funcion.'VacacionesJP'), 
     
     //MIS DATOS
     'MisDatos' => array('class'=>'./class/controller/MisDatos.class.php' ,'controller' =>'MisDatos', 'action' =>$funcion.'MisDatos'), 
     
     //ANTICIPO AGENTE
     'AnticipoAgente' => array('class'=>'./class/controller/AnticipoAgente.class.php' ,'controller' =>'AnticipoAgente', 'action' =>$funcion.'AnticipoAgente'), 
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
    
    #var_dump($controlador);
    #Ejecución del controlador asociado a la ruta

    require_once $controlador['class'];
    
    if (method_exists($controlador['controller'],$controlador['action'])) {
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