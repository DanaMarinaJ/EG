<html>
    <head>
        <title>PHP: arrays, funciones</title>
    </head>
    <body>
        <?php
            function comprobar_nombre_usuario($nombre_usuario){
                //compruebo que el tamaño del string sea válido.
                if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20){
                    echo $nombre_usuario . " no es válido<br>";
                    return false;
                }
                //compruebo que los caracteres sean los permitidos
                $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_";
                for ($i=0; $i<strlen($nombre_usuario); $i++){
                    if (strpos($permitidos, substr($nombre_usuario,$i,1))===false){
                        echo $nombre_usuario . " no es válido<br>";
                        return false;
                    }
                }
                echo $nombre_usuario . " es válido<br>";
                return true;
            }

            if (!isset($_POST['submit'])) {
                ?>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">Nombre de usuario: <input name="name" size="10">
                    <input type="submit" name="submit" value="Comprobar">
                </form>
                <?php
            }
            else {
                $name = $_POST['name'];
                comprobar_nombre_usuario($name);
            }
        ?>
    </body>
</html>