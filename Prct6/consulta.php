<html>
    <head>
        <title>Listado completo</title>
    </head>
    <body>
        <?php
            include("conexion.inc");
            $vSql = "SELECT * FROM ciudades";
            $vResultado = mysqli_query($link, $vSql);
            $total_registros=mysqli_num_rows($vResultado);
        ?>
        <table>
            <tr>
                <td><b>Ciudad</b></td>
                <td><b>Pais</b></td>
                <td><b>Superficie</b></td>
                <td><b>Habitantes</b></td>
                <td><b>Tiene metro?</b></td>
            </tr>
            <?php
                while ($fila = mysqli_fetch_array($vResultado))
                {
            ?>
            <tr>
                <td><?php echo ($fila['ciudad']); ?></td>
                <td><?php echo ($fila['pais']); ?></td>
                <td><?php echo ($fila['superficie']); ?></td>
                <td><?php echo ($fila['habitantes']); ?></td>
                <td><?php echo ($fila['tiene_metro'] ? 'Si' : 'No'); ?></td>
            </tr>
            <tr>
                <td colspan="5">
                    <?php
                        }
                        // Liberar conjunto de resultados
                        mysqli_free_result($vResultado);
                        // Cerrar la conexion
                        mysqli_close($link);
                    ?>
                </td>
            </tr>
        </table>
        <p>&nbsp;</p>
        <p><a href="menu.html">Volver al menu del ABML</a></p>
    </body>
</html>