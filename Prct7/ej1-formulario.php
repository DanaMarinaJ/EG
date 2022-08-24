<?php
    if (isset($_COOKIE["estilo"])) {
        $estilo = $_COOKIE["estilo"];
    }
    else{
        $estilo = '';
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <title>Cookies en PHP</title>
        <?php
            if ($_COOKIE["estilo"]) {
                echo ('<link rel="stylesheet" type="text/css" href="'.$estilo.'.css">');
            }
        ?>
    </head>
    
    <body>
        
        <form action="ej1-cookies.php" method="post">
            <p>Aquí puedes seleccionar el estilo que prefieres en la página: </p>
            <br>
            <select name="estilo">
                <option value="1-verde">Verde
                <option value="1-rosa">Rosa
                <option value="1-negro">Negro
            </select>
            <input type="submit" value="Actualizar el estilo">
        </form>
    </body>
</html>