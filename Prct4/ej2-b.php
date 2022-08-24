<html>
    <head>
        <title>PHP: variables, tipos, operadores, expresiones, estructuras de control</title>
    </head>
    <body>
        <?php

   /*          for ($i = 1; $i <= 10; $i++) {
                print $i;
            }

            for ($i = 1; $i <= 10; print $i, $i++);

            for ($i = 1; ;$i++) {
                if ($i > 10) {
                    break;
                }
                print $i;
            } */

            $i = 1;
            for (;;) {
                if ($i > 10) {
                    break;
                }
                print $i;
                $i++;
            }
        ?>
    </body>
</html>