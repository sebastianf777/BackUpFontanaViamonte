<!DOCTYPE html>
<html>
<head>
      
<!-- ESTILO PARA BOTONES Y CAJON DE BUSQUEDA=============-->

	<title>-inicio Fontana Viamonte</title>
  	<meta charset="UTF-8">
	<link rel="icon" 		type="image/png" 	href="total/images/icons/favicon.ico"/>
	<link rel="stylesheet"  type="text/css" 	href="total/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet"  type="text/css" 	href="total/css_table/main.css">

<!--==== CSS FORM/VIEW.CSS BOTONES A ENLACES ==============================-->      

	<link rel="stylesheet" href="total/ccs_form/view.css">
	      
<!-- CSS ADMIN PRUEBAS -->

    <style>

		* {
  		box-sizing: border-box;
		}
		form.example input[type=text] {
  		padding: 10px;
  		font-size: 17px;
  		border: 1px solid grey;
  		float: left;
  		width: 80%;
  		background: #f1f1f1;
		}
		form.example button {
  		float: left;
  		width: 20%;
  		padding: 10px;
  		background: #2196F3;
  		color: white;
  		font-size: 17px;
  		border: 1px solid grey;
  		border-left: none;
  		cursor: pointer;
		}
		form.example button:hover {
  		background: #0b7dda;
		}
        form.example::after {
  		content: "";
  		clear: both;
  		display: table;
		}
  		h1 {text-align: center;}
  		h2 {text-align: center;}
  		p {text-align: center;}
        iframe{
        width: 100%;
        border: 2px solid #ccc;
    	}
   
    </style>
	</head>

<!-- BODY -->

	<body> 


<header>

<ul class="nav">
<li class="liLeft active"><a href="admin_pruebas.php">Inicio</a></li>
	  <li class="liLeft"><a href="formulario_producto.php">Registrar Productos</a></li>
	  <li class="liRight"><a href="#about">About</a></li>
	  
	 <li class="liLeft">
			  <form  target="_blank"  method="post"  action="ver_tabla_pruebas.php" style="height: 44px;">
							<input id="TABLA" name="TABLA" type="hidden" value="productos">
							<button style= " font-family: 'PT Serif', serif; margin: 0px; width: 110px; height:47px; color:white; border-right: grey solid .1px; cursor: pointer; " type="submit" onclick="javascript: form.action='ver_tabla_pruebas.php';">Ver Registros</button>
							</form>
	  </li>
</ul>

</header>

<!-- CLEAR-FLOATS -->

<div class="clearFloats">
</div>

<!-- BOTONES DIRECTO A ENLACES -->

 		<div class="limiter">
		<div class="container-table100">
			<div class="logoI"></div>
		<div class="wrap-table100"> 
 		<h1>CONTROL DE VENTAS FONTANA VIAMONTE</h1>
        <br>

         <div id="wrap">
		 <div id="header">
		 <p align="center">
   
         <form class="example" target="_blank"  method="post"  action="ver_tabla_pruebas.php" style= " margin-left: auto; margin-right: auto; width: 425px;">
		 <input id="TABLA" name="TABLA" type="hidden" value="productos">
          <button style= " margin: 5px; width: 200px; background-color: #4CAF50 " type="submit" onclick="javascript: form.action='ver_tabla_pruebas.php';">Ver tabla completa</button>
         <button style= " margin: 5px; width: 200px; background-color: #4CAF50 " type="submit" onclick="javascript: form.action='formulario_producto.php';">Registrar Producto</button>
  
        </form>               
        </div>
		</div>
	   	</div>
  		</div>
		</div>

</body>
</html>