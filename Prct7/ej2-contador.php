<?php
    if (isset($_COOKIE["contador"])){
        $contador = $_COOKIE["contador"];
        $contador ++;
        $mensaje = "Bienvenido nuevamente! Esta es su visita número ".$contador;
    }
    else{
        $contador = 1;
        $mensaje ="Bienvenido por primera vez a nuestra página!";
    }
    setcookie("contador", $contador);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <title>Cookies en PHP</title>
    </head>
    
    <body>
        <?php
            echo($mensaje);
        ?>
    </body>
</html>