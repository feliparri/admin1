
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>CONTROL STOCK</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>
    <script src="assets/js/eventos.js?x=<?php echo rand(1,100);?>"></script>

   

</head>
<body onload="startup()">
<form class="form1" name="f1" id="f1" >
    <div class="wrapper">
        
    		<?php include ('tpl/tpl-sidebar.php'); ?>

    	    <div class="main-panel">
    	        <?php include('tpl/tpl-top.php'); ?>

    	         <?php

                    if(isset($parametro['template'])){
                        include($parametro['template']);
                    }else{
                        include('./tpl/tpl-contenido.php');
                    }
                  ?>

    	        <?php include('tpl/tpl-footer.php'); ?>
    	        
    	    </div>
    	
        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->
        	<input type="hidden" name="accion" id="accion" value="">
            <input type="hidden" name="funcion" id="funcion" value="">
    </div>
</form>

</body>

    <!--   Core JS Files   -->


	<script type="text/javascript">
        function startup() {
          var el = document.getElementsByTagName("body")[0];
          el.addEventListener("touchstart", handleStart, false);
          el.addEventListener("touchend", handleEnd, false);
          el.addEventListener("touchcancel", handleCancel, false);
          el.addEventListener("touchleave", handleLeave, false);
          el.addEventListener("touchmove", handleMove, false);
        }

        function handleStart(evt) {
          evt.preventDefault();
          var el = document.getElementsByTagName("canvas")[0];
          var ctx = el.getContext("2d");
          var touches = evt.changedTouches;
                
          for (var i=0; i<touches.length; i++) {
            ongoingTouches.push(touches[i]);
            var color = colorForTouch(touches[i]);
            ctx.fillStyle = color;
            ctx.fillRect(touches[i].pageX-2, touches[i].pageY-2, 4, 4);
          }
        }

    	$(document).ready(function(){
    		demo.initChartist();
            var session="<?php echo $_SESSION['entroOkLogin']?>";
        	/*demo.initChartist();
        	console.log(session);
        	var msg = session == 0 ? 'POR FAVOR INGRESE SU USUARIO Y PASSWORD':'SESION INICIADA';
        	var ico = session == 0 ? 'pe-7s-door-lock':'pe-7s-check';
        	$.notify({
            	icon: ico,
            	message: msg

            },{
                type: 'info',
                timer: 2000
            });*/

    	});
	</script>

</html>
