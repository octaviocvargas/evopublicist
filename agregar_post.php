<?php
	require("conexion.php"); 
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Agregar publicacion</title>
 </head>
 <style>
 	form{
 		width: 400px;
 		height: auto;
 		background-color: blue;
 		color: white;
 	}
 </style>
 <body>
 	

 	<h1>Agregar publicacion</h1>

 	<form action="#" method="post">
 		<label for="titulo">Ingresa Titulo
			<input type="text" name="titulo" id="titulo" placeholder="Ingresar Titulo">
 		</label>
 		
 		<label for="contenido">Ingresa Contenido
			<textarea type="text" name="contenido" id="contenido" placeholder="Ingresar contenido">
			</textarea>
 		</label>
 		<input type="submit" name="Enviar">
 	</form>

 </body>
 </html>

 <?php 

if($_POST){
	$titulo = $_POST['titulo'];
	$contenido = $_POST['contenido'];
	// $linea = date('m/d/Y h:i:s a', time());
	

	$sql = $conn->query("INSERT INTO posts (titulo,contenido) VALUES ('$titulo','$contenido')");


	// if ($conn->query($sql) === TRUE) {
	//     echo "New record created successfully";
	// } else {
	//     echo "Error: " . $sql . "<br>" . $conn->error;
	// }
	$conn->close();
}

  ?>