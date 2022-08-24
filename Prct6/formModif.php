<html>
    <head>
        <title>Modificacion</title>
    </head>
    <body>
        <?php
            include ("conexion.inc");
            
            $vCiudad = $_POST['ciudad'];
            //Arma la instrucción SQL y luego la ejecuta
            $vSql = "SELECT * FROM ciudades WHERE ciudad ='$vCiudad' ";
            $vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
            $fila = mysqli_fetch_array($vResultado);
            if(mysqli_num_rows($vResultado) == 0) {
                echo ("Ciudad Inexistente...!!! <br>");
                echo ("<a href='formModif.html'>Continuar</A>");
            }
            else {
        ?>
        <form action="modificacion.php" method="POST" name="formModif">
            <table width="356">
                <tr>
                <td width="103"> Ciudad: </td>
                <td width="243"> <input type="text" name="ciudad" value="<?php echo($fila['ciudad']); ?>"></td>
            </tr>
            <tr>
                <td width="103"> Pais: </td>
                <td width="243"> <input type="text" name="pais" value="<?php echo($fila['pais']); ?>"></td>
            </tr>
            <tr>
                <td width="103"> Habitantes: </td>
                <td width="243"> <input type="number" name="habitantes" value="<?php echo($fila['habitantes']); ?>"></td>
            </tr>
            <tr>
                <td width="103"> Superficie: </td>
                <td width="243"> <input type="number" name="superficie" value="<?php echo($fila['superficie']); ?>"></td>
            </tr>
            <tr>
                <td width="103"> Tiene metro? </td>
                <td width="243"> <input type="checkbox" name="tieneMetro"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="Submit" value="Modificar">
                </td>
            </tr>
        </table>
    </form>
    <?php
        }
        // Liberar conjunto de resultados
        mysqli_free_result($vResultado);
        // Cerrar la conexion
        mysqli_close($link);
    ?>
    </body>
</html>