<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ví dụ C</title>
</head>
<body>
    <form action="" method="post">
        Form tính tổng n số nguyên <br/>
        Nhập số nguyên n: <input type="text" name="n" id="">
        <br/>
        <input type="submit" value="Tính">
    </form>
    <?php 
    if (isset($_POST['n'])) {
       $son = $_POST['n'];
       $sum = 0;
       for ($i=0; $i <= $son  ; $i++) { 
           $sum += $i;
       }
       echo "Tổng là: ".$sum;
    }
    ?>
</body>

</html>