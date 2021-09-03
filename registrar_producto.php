<?php
//include connection
include("conectar.php");

if(isset($_POST['submit']))
{

$numero = $_POST['element_1'];
$producto = $_POST['element_2'];
$serie = $_POST['element_3'];
$fechaing = $_POST['element_4_3']."-".$_POST['element_4_1']."-".$_POST['element_4_2'];
  
$stmt = $con->prepare("INSERT INTO productos ( numero, producto, serie, fechaing ) VALUES (?, ?, ?, ?)");
$stmt->bind_param('isss', $numero, $producto, $serie, $fechaing );
$stmt->execute();
} 
// if ($conn-> query($stmt) === TRUE)
// {
//     echo "The New Inserted Id is:" .$conn-> insert_id;
// }
// else
// {
//     echo "Not Inserted";
// }

if ($stmt->error)
	{
echo '<script type="text/javascript">'; 
echo 'alert("ERROR! REVISAR SI FALTA ALGUN DATO");'; 
echo 'window.location = "formulario_producto.php";';
echo '</script>';
    }
    else
    {
echo '<script type="text/javascript">'; 
echo 'alert("REGISTRO DE DATOS CORRECTO");'; 
echo 'window.location = "formulario_producto.php";';
echo '</script>';
    }

$stmt->close();
?>  