<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập số t</title>
</head>
<body>
    <form action="nhap_tuoi.php" method="post">
        <input type="number" name="tuoi" id="">
        <input type="submit" value="Tuổi bạn là" name="nhap">
    </form>
    <?php
        if(isset($_POST["nhap"]) && $_POST["nhap"] )
        {
            $tuoi=$_POST["tuoi"];
            if($tuoi >18)
            {
                echo"bạn đã đủ diều kiện vào lớp 10" ." " .$tuoi;
            }
            else
            {
                echo "bạn không đủ diều kiện vào lớp 10" ." ".$tuoi;
            }
        }
    ?>
</body>
</html>