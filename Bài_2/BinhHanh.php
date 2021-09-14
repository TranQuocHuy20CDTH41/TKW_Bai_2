<?php
    if(isset($_POST['canha']) && isset($_POST['chieucao'])){
        $a = $_POST['canha'];
        $h = $_POST['chieucao'];
        $P = ($a + $h) * 2;
        $S = $a * $h;

        echo"Chu vi hình bình hành là: ".$P;
        echo"<br>Diện tích hình bình hành là: ".$S;
    }
?>
<html>
    <head>
        <title>Hình bình hành</title>
    </head>
    <body>
        <form action="BinhHanh.php" method="POST">
            Cạnh a: <input type="text" name="canha"><br>
            Chiều cao h: <input type="text" name="chieucao"><br>
            <input type="submit" value="Tính">
        </form>
    </body>
</html>