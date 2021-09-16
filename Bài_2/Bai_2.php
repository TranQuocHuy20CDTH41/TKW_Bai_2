<form action="" method="post">
        Form nhập vào tháng</br></br>
        Nhập tháng: <input type="text" name="month" id=""></br>
        </br>
        Nhập năm: <input type="text" name="yrs" id=""></br>
        </br>
        </br>
        <input type="submit" value="Tính">
    </form>
    <?php 
        if (isset($_POST['month']) && isset($_POST['yrs'])) {
           $thang = $_POST['month'];
           $nam = $_POST['yrs'];
          switch ($thang) {
                case 1: case 3: case 5: case 7: case 8: case 10: case 12:
                    echo "Tháng có 31 ngày";
                    break;
                case 6: case 9: case 11: case 4:
                echo "Tháng có 30 ngày";
                break;
                case 2:
                    if ($nam%4==0) {
                        echo "Tháng có 29 ngày";
                        break;
                    }else{
                        echo "Tháng có 28 ngày";
                        break;
                    }
                    default:
                        echo "Không phải là tháng";
                        break;
          }
    
        }
    ?>