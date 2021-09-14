<?php
    if(isset($_POST['canha'])){
        $a = $_POST['canha'];
        $P = $a * 4;
        $S = $a * $a;

        echo"Chu vi hình vuông là: ".$P;
        echo"<br>Diện tích hình vuông là: ".$S;
    }
?>
<html>
    <head>
        <title>Hình vuông</title>
    </head>
    <body>
        <form action="HinhVuong.php" method="POST">
            Cạnh a: <input type="text" name="canha"><br>
            <input type="submit" value="Tính">:
        </form>
    </body>
</html>