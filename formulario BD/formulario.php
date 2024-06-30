<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="formularioFuncional.css">
    <title>Document</title>
</head>
<body>
    <div class="contenedor">
        <div id="formulario">
            <h1>Deje su consulta:</h1>
            <form method="post">
                    <input class="celdas" type="text" name="nombre" placeholder="nombre" required>
                
                    <input class="celdas" type="email" name="email" placeholder="E-mail" required>
           
                    <input class="celdas" type="text" name="localidad" placeholder="localidad" required>
                
                    <input class="celdas" type="text" name="provincia" placeholder="provincia" required>
                
                    <input class="celdas" type="text" name="celular" placeholder="celular" required>
            
                    <textarea  class="celdas" name="presupuesto" placeholder="en que podemos ayudarlo?" required></textarea>
                    <input class="celdas" type="submit" name="enviar" id="boton">
                    <br></br>
                    <button class="celdas" id="boton"><a id="boton" href="../index.php">Inicio</a></button>
                    <br></br>

            </form>
        </div>
    </div>
    
    <?php 
        include("conexionBD.php");
    ?>  
</body>
</html>
