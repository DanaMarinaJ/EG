<html>
    <head>
        <title>Baja</title>
    </head>
    <body>
        <?php
            include ("conexion.inc");
            $vCiudad = $_POST ['ciudad'];
            $vSql = "SELECT * FROM ciudades WHERE ciudad='$vCiudad' ";
            $vResultado = mysqli_query($link, $vSql);
            if(mysqli_num_rows($vResultado) == 0)
            {
                echo ("Ciudad Inexistente...!!! <br>");
                echo ("<a href='formBaja.html'>Continuar</A>");
            }
            else{
            
            //Arma la instrucción SQL y luego la ejecuta
            $vSql= "DELETE FROM ciudades WHERE ciudad = '$vCiudad' ";
            mysqli_query($link, $vSql);
            echo("La ciudad fue borrada<br>");
            echo("<a href='menu.html'>Volver al Menu del ABML</A>");
            }
            // Liberar conjunto de resultados
            mysqli_free_result($vResultado);
            // Cerrar la conexion
            mysqli_close($link);
        ?>
    </body>
</html>