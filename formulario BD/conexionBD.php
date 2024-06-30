<?php
include("enlace.php");

if (isset($_POST['enviar'])) {   /*ESTO SERIA = "SI SE APRETO LA VARIABLE BOTON "REGISTRAR"" PASARIA LO SIGUIENTE */
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['localidad']) >= 1 
    && strlen($_POST['provincia']) >= 1 && strlen($_POST['celular']) >= 1 && strlen($_POST['presupuesto']) >= 1  ) {   /*COMO TOMO LO QUE ESTA DENTRO DE CADA CELDA? =
        /*strlen= para saber la cantidad de caracteres que tiene; es mayor a 1 entoces se inician las variables siguientes*/


        $nombre = trim($_POST['nombre']);                       /*estas serian las variables, estas empiezan con el simbolo "$"*/
	    $email = trim($_POST['email']);
        $localidad = trim($_POST['localidad']);
        $provincia = trim($_POST['provincia']);
        $celular = trim($_POST['celular']);
        $presupuesto = trim($_POST['presupuesto']);
	    $fecha = date("d/m/y");

        $consulta = "INSERT INTO datosa (nombre, email, localidad, celular, provincia, presupuesto, fecha) 
        VALUES ('$nombre','$email','$localidad', '$celular', '$provincia','$presupuesto','$fecha')";

        $resultado = mysqli_query($conex,$consulta);

        if ($resultado) {	/*SI TODO SALE BIEN ME TIRA ESTOS TEXTOS*/
	    	?> 
	    	<h3 class="ok">¡Gracias por su tiempo!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="error">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="error">¡Por favor complete los campos!</h3>
           <?php
    }
}
?>