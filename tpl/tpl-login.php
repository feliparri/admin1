<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="assets/css/login.css" rel="stylesheet" id="bootstrap-css">
<script src="assets/js/jquery.3.2.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/login.js?x=<?php echo rand(5, 15);?>"></script>

<!------ Include the above in your HEAD tag ---------->

<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="formlogin form-signin" id="f1" name="f1">
                <span id="reauth-email" class="reauth-email"></span>
                
                <input type="input" id="inputEmail" name="inputEmail" class="form-control" placeholder="Usuario" required autofocus><br>
                <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Contraseña" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <br>
                <!--<input type="button" onclick="javascript:ingresaLogin();" value="Ingresar" class="ButIngresar btn btn-default submit">-->
                <button onclick="javascript:ingresaLogin();" class="ButIngresar btn btn-lg btn-primary btn-block btn-signin" type="submit">Ingresar</button>
                
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Olvidaste tu password?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->

<script type="text/javascript">     
    $(function () {
     $('#f1').on('submit', function(e) {
        var datos = array(
                        'user'=>$("#inputEmail").val(),
                        'pass'=>$("#inputPassword").val()
                    );
       $.ajax({
        type: 'post',
        url: './validar/validarLogin.php',
        data: datos,
        success: function (d) {
            console.log(d);
       });
      }
   });
   e.preventDefault();
 });
 });
 </script>