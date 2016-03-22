﻿<!DOCTYPE html>
<html>
  <head>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="icon" href="../../favicon.ico">

    <title>prueba bootstrap</title>
    
    
    <!-- BOOTSTRAP -->
	
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700">
	<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">  
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<link href="http://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700" rel="stylesheet" type="text/css"/>
    <script src="../bootstrap/js/jquery-2.2.1.min.js"></script>
    <script src="../bootstrap/js/jquery-ui.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../css/style.css">
    
    
	   <!-- HOJAS DE ESTILO -->

    <link href="../css/contenido.css" rel="stylesheet"/>
    <link href="../css/menu_Superior.css" rel="stylesheet"/>
    <link href="../css/login.css" rel="stylesheet"/>
    <link href="../css/registro.css" rel="stylesheet"/>
	   <!-- SCRIPTS -->

    <script src="../js/presentacion.js"></script>



    <script type="text/javascript">
    $(document).ready(function(){

    	fijarMenuSuperior();
     	cerrarPopover();
		  generarPopover();
	    eventoRegistro();
      eventoInicio()
		  
    });


    
   
    

    </script>



  </head>
<body>
    <div id="paginaContainer">
      <div class="menus_seleccionados">
      </div>
      <div id="navegacion">
        <nav class="navbar navbar-default navbar-static-top">
          <div class="container" >
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active" id="eventoInicio"><a href="#">Inicio</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="registro.php">Default</a></li>
                <li class="active">
                	<a id="loginPopover" data-toggle="popover" data-html="true" data-placement="bottom">
                		<img src="../imagenes/img-user.png" alt="Usuario" height="18" width="18"> 
                		<span class="sr-only">(current)</span>
                	</a>
                </li>
                <li><a href="../navbar-fixed-top/">Fixed top</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
      </div>
      
      <div id="container" class="container" role="main">
      <button type="button" id="boton_desaparecer" class="btn btn-default">Boton para desaparecer el mundo</button>
      </div>

	<div id="divLoginPopover" style="display: none">
		<div id="Login">
		<form class="form-inline" role="form" >
	        <div class="form-group">
	          <label class="login" for="UsuarioInput">Usuario</label>
	          <input class="login form-control has-feedback" id="UsuarioInput" size="80" type="text"/>
	        </div>
	        <div class="form-group">
	          <label class="login" for="PassInput">Contraseña</label>
	          <input class="login form-control has-feedback" id="PassInput" size="80" type="text" value="Click to focus...">
	        </div>
	        <div class="">
            <button type="button" class="btn btn-success margenes-boton-login">Loguear</button>
            <button  id="registro" data-toggle="popover" type="button" class="btn btn-default margenes-boton-login boton-registro" >Registrarse</button> 
            </div>
	    </form>
	    </div>
	</div>
	
    </div>


</body>
</html>