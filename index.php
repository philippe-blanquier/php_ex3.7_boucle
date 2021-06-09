<!DOCTYPE html>
<html lang='fr'>
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 3.7 boucle</title>
    </head>
    <body >
        <p>
            <?php
            for ($idx=1; $idx <=100; $idx+=15)
            {
                echo nl2br("On tient le bon bout\n");
            }
            ?>
       </p>
    </body>
</html>