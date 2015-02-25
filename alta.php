<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coordinacion Informatica</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
		body{background-color:#8CC63F}
	</style>
  </head>
  <body>
  
    <div class="alert alert-success" role="alert" align="right"> <?php echo($_COOKIE['nombre']); ?> 
    
    </div>
    

  
	<div class="container" fondo>      
        <div class="row">
          <div class="col-xs-12">          
          	<!-- <img class="img-responsive" src="img/logo.jpg" alt="test"> -->
          	&nbsp;
          </div>
        </div>
      </div>    

	<div class="container">
		<form role="form" action="grabar.php" method="POST">
		<div class="row">
			<div class="col-xs-2"></div>
			<div class="col-xs-4 columnasinborde">
				<!--<div class="form-group">
                		<label for="Area">Area</label>
                		<input id="Area" type="text" class="form-control">
            </div> -->
        <div class="form-group">
          <label for="Area">Area</label>
          <select id="Area" name="area" class="form-control">
              <?php
                require("BD/BDAreas.php"); 
                DevuelvoArrayAreasOrdenada($arreglo);
                $longitud=count($arreglo);
                for ($i=0; $i<$longitud;$i++)
                    {
                      echo '<option>'. $arreglo[$i].'</option>';
                    }
              ?>
                
          </select>
        </div>
			</div>
			<div class="col-xs-4 columnasinborde">
				<div class="form-group">
                	<label for="Usuario">Usuario/s</label>
                	<input id="Usuario" name="usuario" type="text" class="form-control" required>
              	</div>
			</div>
			<div class="col-xs-2"></div>
		</div>

		<div class="row">
			<div class="col-xs-2"></div>
			<div class="col-xs-2 columnasinborde">
        <div class="form-group">
          <label for="Edificio">Edificio</label>
          <select id="Edificio" name="edificio" class="form-control">
              <?php
                require("BD/BDEdificio.php"); 
                DevuelvoArrayEdificioOrdenada($arreglo2);
                $longitud=count($arreglo2);
                for ($i=0; $i<$longitud;$i++)
                    {
                      echo '<option>'. $arreglo2[$i].'</option>';
                    }
              ?>
          </select>
        </div>
      </div>

      <div class="col-xs-2 columnasinborde">
				<div class="form-group">
                		<label for="Ip">Ip</label>
                		<input id="Ip" name="ip" type="text" pattern="[0-9]+" Title="Solo Numeros de 2 a 254" class="form-control" required >
              		</div>
			</div>
			<div class="col-xs-4 columnasinborde">
				<div class="form-group">
      					<label for="SistemaOperativo">S. Operativo</label>
      					<select id="SistemaOperativo" name="sistemaoperativo"  class="form-control" required>
        					<option>Windows 2000</option>
        					<option>Windows XP</option>
        					<option>Windows Vista</option>
        					<option>Windows 7</option>
        					<option>Windows 8</option>
        					<option>Linux - Kubuntu</option>
        					<option>Linux - Ubuntu</option>
        					<option>Linux Otro</option>
      					</select>
    				</div>
			</div>
			<div class="col-xs-2"></div>
		</div>
		<div class="row">
			<div class="col-xs-2"></div>
			<div class="col-xs-4 columnasinborde">
				<div class="form-group">
                	<label for="Cpu">CPU</label>
                	<input id="Cpu" type="text" name="cpu" class="form-control" required>
              	</div>
			</div> 
			<div class="col-xs-4 columnasinborde">
				<div class="form-group">
                		<label for="Memoria">Memoria</label>
                		<input id="Memoria" name="memoria" type="text" class="form-control" required>
              		</div>
			</div> 
			<div class="col-xs-2"></div>
		</div>
		<div class="row">
			<div class="col-xs-2"></div>
			<div class="col-xs-4 columnasinborde">
				<div class="form-group">
                	<label for="Hd">Disco Duro</label>
                	<input id="Hd" type="text" name="hd" class="form-control" required>
              	</div>
			</div> 
			<div class="col-xs-4 columnasinborde">
				<div class="form-group">
                		<label for="Monitor">Monitor</label>
                		<input id="Monitor" type="text" name="monitor" class="form-control" required>
              		</div>
			</div> 
			<div class="col-xs-2"></div>
		</div>
		<div class="row">
			<div class="col-xs-2"></div>
			<div class="col-xs-4 columnasinborde">
				<div class="form-group">
                	<label for="Impresora">Impresora</label>
                	<input id="Impresora" type="text" name="impresora" class="form-control" required>
              	</div>
			</div> 
      <div class="col-xs-4 columnasinborde">
        <div class="form-group">
            <label for="oficina">Oficina</label>
            <input id="oficina" type="text" name="oficina"  class="form-control" required>
        </div>
      </div>
			<div class="col-xs-2">
				
			</div> 
		</div>
		<div class="row">
			<div class="col-xs-2 "></div>
			<div class="col-xs-8 columnasinborde" align="center">
				<!--<input type="submit" name="bgrabar" class="btn btn-success" value="Continuar"> -->
      </div>
      </div>
			<div class="col-xs-2"></div>
			 &nbsp;
		</div>
  

	</div>

  </div>
  <!--<div class="container ">
    <div class="row">
      <div class="col-xs-2"></div>
      <div class="col-xs-8 " align="center" >
        <br>
        <input type="submit" name="bgrabar" class="btn btn-success" value="Continuar">
        <a href="index.html" target="_self"> <input type="button"  class="btn btn-danger"name="Salir" value="Volver a Inicio" /> </a> 

        <br>
      </div>
      <div class="col-xs-2"></div>
    </div>
    <div class="row">
      <div class="col-xs-2"></div>
      <div class="col-xs-8 "><br></div>
    </div>

  </div>
  -->
  <div class="bottom columna">
    <br>
    <div class="container">
      <div class="row">
        <div class="col-xs-6">
          <input type="submit" name="bgrabar" class="btn btn-success" value="Continuar" align="center">      
        </div>
        <div class="col-xs-6">
          <a href="index.html" target="_self"> <input type="button"  class="btn btn-danger"name="Salir" value="Volver a Inicio" align="right"/> </a> 
        </div>

      </div>
    </div>

    
    
    
    
    <h5 align="right" >Coordinacion Informatica 2014 </h5>

      
  </div> 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
  </body>
</html>