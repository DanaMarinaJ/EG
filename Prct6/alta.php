<html>
    <head>
        <title>Alta</title>
    </head>
    <body>
        <?php
            include("conexion.inc");

            //Captura datos desde el form anterior
            $vCiudad = $_POST['ciudad'];
            $vPais = $_POST['pais'];
            $vHabitantes = $_POST['habitantes'];
            $vSuperficie = $_POST['superficie'];
            if(isset($_POST['tieneMetro'])) {
                $vTieneMetro = 1;
            }
            else {
                $vTieneMetro = 0;
            }

            //Arma la instrucción SQL y luego la ejecuta
            $vSql = "SELECT Count(ciudad) as canti FROM ciudades WHERE ciudad='$vCiudad'";
            $vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
            $vCantCiudades = mysqli_fetch_assoc($vResultado);

            if ($vCantCiudades ['canti']!=0){
                echo ("Esa ciudad ya ha sido ingresada<br>");
                echo ("<a href='menu.html'>VOLVER AL ABML</a>");
            }
            else {
            $vSql = "INSERT INTO ciudades (ciudad, pais, superficie, habitantes, tiene_metro)
            values ('$vCiudad','$vPais', '$vSuperficie', '$vHabitantes', '$vTieneMetro')";
            mysqli_query($link, $vSql) or die (mysqli_error($link));
            echo("La ciudad fue registrada con éxito<br>");
            echo ("<a href='menu.html'>VOLVER AL ABML</a>");
            // Liberar conjunto de resultados
            mysqli_free_result($vResultado);
            }
            // Cerrar la conexion
            mysqli_close($link);
        ?>
    </body>
</html>