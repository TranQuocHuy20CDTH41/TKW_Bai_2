<?php
    //Tính toán và hiện thị 
    //if(isset(...) && isset(...))
    if(isset($_POST['bankinh'])){
        $r = $_POST['bankinh'];
        $P = 2 * 3.14 * $r;
        $S = 3.14 * $r * $r;
        echo"Chu vi hình tròn là: ".$P;
        echo"<br>Diện tích hình tròn là".$S;
    }
?>
<html>
    <head>
        <title>Hình tròn</title>
    </head>
    <body>
        <form action="HinhTron.php" method="post">
            Bán kính: <input type="text" name="bankinh"><br>
            <input type="submit" value="Tính">
        </form>
    </body>
</html>