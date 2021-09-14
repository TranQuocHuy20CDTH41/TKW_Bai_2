<?php
    if(isset($_POST['canha']) && isset($_POST['canhb']) && isset($_POST['canhc']))
    $a = $_POST['canha'];
    $b = $_POST['canhb'];
    $c = $_POST['canhc'];

    $P = $a + $b + $c;

    echo"Chu vi tam giác là: ".$P;
?>
<html>
    <head>
        <title>Hình tam giác</title>
    </head>
    <body>
        <form action="TamGiac.php" method="POST">
            Cạnh a: <input type="text" name="canha"><br>
            Cạnh b: <input type="text" name="canhb"><br>
            Cạnh c: <input type="text" name="canhc"><br>
            <input type="submit" value="Tính">
        </form>
    </body>
</html>