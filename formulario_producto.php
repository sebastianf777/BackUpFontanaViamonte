<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>-formulario Fontana Viamonte</title>

<!-- CSS FORM/VIEW CSS  -->

<link rel="stylesheet" type="text/css" href="total/ccs_form/view.css" media="all">

<script type="text/javascript" src="total/js_calendar/calendar.js"></script>
</head>

<body id="main_body" >
	
<header>

	<ul class="nav">
	  <li class="liLeft"><a href="index.php">Inicio</a></li>
	  <li class="liLeft active"><a href="formulario_producto.php">Registrar Productos</a></li>
	  <li class="liRight"><a href="#about">About</a></li>
	  <li class="liLeft">
			  <form  target="_blank"  method="post"  action="ver_tabla_pruebas.php" style="height: 44px;">
							<input id="TABLA" name="TABLA" type="hidden" value="productos">
							<button style= "font-family: 'PT Serif', serif; margin: 0px; width: 110px; height:47px; color:white; background:transparent; border-right: grey solid .1px;" type="submit" onclick="javascript: form.action='ver_tabla_pruebas.php';">Ver Registros</button>
							</form>
	  </li>
</ul>
</header>


 <div class="clearFloats">
</div>

</header>
	
	<div id="form_container">
	
		<img class="logom" src="total/images/logom.png" alt="">

	
		<form id="form_18653" class="appnitro"  method="post" action="registrar_producto.php">
					<div class="form_description">
                      <h2>FORMULARIO PARA VENTAS EN MOSTRADOR</h2>
			<p>FONTANA MATERIALES VIAMONTE</p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">NÚMERO : </label>
		<div>
			<input id="element_1" name="element_1" class="element text small" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">NOMBRE DEL PRODUCTO : </label>
		<div>
			<input id="element_2" name="element_2" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">VENDEDOR : </label>
		<div>
			<input id="element_3" name="element_3" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">FECHA DE INGRESO : </label>
		<span>
			<input id="element_4_1" name="element_4_1" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_4_1">MM</label>
		</span>
		<span>
			<input id="element_4_2" name="element_4_2" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_4_2">DD</label>
		</span>
		<span>
	 		<input id="element_4_3" name="element_4_3" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_4_3">YYYY</label>
		</span>
	
		<span id="calendar_4">
			<img id="cal_img_4" class="datepicker" src="total/js_calendar/calendar.gif" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_4_3",
			baseField    : "element_4",
			displayArea  : "calendar_4",
			button		 : "cal_img_4",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate,
			
			});
		</script>
		 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="18653" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
		
	</div>
	</body>
</html>