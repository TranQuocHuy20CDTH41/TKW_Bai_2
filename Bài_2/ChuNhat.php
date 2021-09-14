<?php
    if(isset($_POST['chieudai']) && isset($_POST['chieurong']))
    $a = $_POST['chieudai'];
    $b = $_POST['chieurong'];
    $P = ($a + $b) * 2;
    $S = $a * $b;

    echo"Chu vi hình chữ nhật là: ".$P;
    echo"<br>Diện tính hình chữ nhật là: ".$S;
?>
<html>
    <head>
        <title>Hình chữ nhật</title>
    </head>
    <body>
        <form action="ChuNhat.php" method="post">
            Chiều dài: <input type="text" name="chieudai"><br>
            Chiều rộng: <input type="text" name="chieurong"><br>
            <input type="submit" value="Tính">
        </form>
    </body>
</html>