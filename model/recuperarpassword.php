<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8' />
        <link href='../css/bootstrap.min.css' rel='stylesheet'>
        <link href='../css/bootstrap-theme.min.css' rel='stylesheet'>
        <link href='../css/mystyles.css' rel='stylesheet'>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
        <script src='../js/bootstrap.min.js'></script>
        <script src='../js/reloj.js'></script>
        <title>App-tracking-twig</title>
    </head>
    <body onload='mueveReloj()'>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">APP-TRACKING</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#"></span>Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                Autores<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Rubén Álvarez</a></li>
                                <li><a href="#">Gorka Pérez</a></li>
                                <li><a href="#">Iosu Recalde</a></li>
                                <li><a href="#">Sergio Varela</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-center">
                        <li>
                            <a id="reloj">Cargando reloj</a>
                        </li> 
                    </ul>               
                </div>    
            </div>
        </nav>
        
        <br>
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title"> Recupera tu cuenta </h4>
                </div>
                <div class="panel-body">
                    <!-- description list -->
                    <dl class="dl-horizontal">
                        <dd>
                            <form class="form-horizontal" action='recuperarpassword2.php' method='POST' name='formulario_recuperarpassword'>
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="col-sm-5">
                                            <input class="form-control" type='hidden' name='email' value="<?php echo $_GET['email']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="pass">Contraseña:</label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type='password' name='pass'>
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="pass2">Repita la contraseña:</label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type='password' name='pass2'>
                                        </div>
                                    </div>
                                </div>
                                <button class="col-sm-offset-2 btn btn-info" type="submit" name="recuperarpassword">Cambiar contraseña</button>
                            </form>
                            <br/>
                        </dd>
                    </dl>
                </div>
            </div>
        </div> 
    </body>
</html>