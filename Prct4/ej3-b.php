<html>
    <head>
        <title>PHP: variables, tipos, operadores, expresiones, estructuras de control</title>
    </head>
    <body>
        <?php
            if (!isset($_POST['submit'])) {
                ?>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">Edad: <input name="age" size="2">
                    <input type="submit" name="submit" value="Ir">
                </form>
                <?php
            }
            else {
                $age = $_POST['age'];
                if ($age >= 21) {
                    echo 'Mayor de edad';
                }
                else {
                    echo 'Menor de edad';
                }
            }
        ?>
    </body>
</html>