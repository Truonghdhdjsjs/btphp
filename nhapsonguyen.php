<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="nhapsonguyen.php" method="post">
        <input type="number" name="tuoi" id="">
        <input type="submit" value="Tuổi bạn là" name="nhap">
    </form>
    <?php
        if(isset($_POST["nhap"]) && $_POST["nhap"])
        {
            $tuoi=$_POST["tuoi"];
            if($tuoi>100)
            {
                echo"số lớn hơn 100";
            }
            else
            {
               echo"số nhỏ hơn 100"; 
            }
        }
    ?>
</body>
</html>