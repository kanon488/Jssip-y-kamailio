
<?php 

//$num=$_GET['ext'];
  $num=11766;    
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Comunicate</title>
	<script type="text/javascript" src="http://localhost/Galeria/assets/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="http://localhost/Galeria/assets/js/jssip-2.0.1.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
	<link rel="stylesheet" href="http://localhost/Galeria/assets/css/style.css">
	<script type="text/javascript" src="http://localhost/Galeria/assets/js/alertify.js"></script>
	<link rel="stylesheet" href="http://localhost/Galeria/assets/css/alertify.core.css" />
	<link rel="stylesheet" href="http://localhost/Galeria/assets/css/alertify.default.css" />
	<script src="http://localhost/Galeria/assets/js/click_script.js" type="text/javascript" charset="utf-8" async defer></script>


</head>
<body>
	<div align="center">
	<div id="Title">
		<table>
			<tr>
				<td><span class="Titulo">Comunicate<img src="http://localhost/Galeria/images/1.png" alt=""></td>
			</tr>
		</table>
	</div>
	<div id="info">
		<table>
			<tr>
				<td id="numextension"><?php echo $num; ?></td>

			</tr>
		</table>
	</div>
</div>
	<div  id="tabla" align="center">
		<table>
			<tr>
			<td class="tablaBlanca"></td>
			<td class="tablaBlanca"></td>
			</tr>
		</table>
	</div>
	<div id="status" >
		
	</div>
<div align="center">
	
		
	<div class="options" align="center" width="65">
		  <div id="llamada">
		  	<input  type="image" src="http://localhost/Galeria/images/tel-teclado.png" value="" placeholder="" >
		  </div>
		  <div id="espacio">
		  	
		  </div>
		  <div id="colgar">
		  	<input  type="image" src="http://localhost/Galeria/images/tel-teclado.png" value="" placeholder="" >
		  </div>
		  <div id="espacio">
		  	
		  </div>
		  <div id="configuracion">
		  	<input type="image" src="http://localhost/Galeria/images/config.png" value="" placeholder="">
		  </div>
		  		
		  	
	</div>
			
						
			
		
	
	<table>
		<tr>
			<td id="mcr" align="center" width="65">Marcar</td>
			<td id="cgr" align="center" width="65">Colgar</td>
			<td align="center" width="65">Configurar</td>
		</tr>
	</table>
</div>

	<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-2.2.3.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>

</body>
</html>