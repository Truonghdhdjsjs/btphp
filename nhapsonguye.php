<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nhập số nguyên</title>
</head>
<body>
    <form action="nhapsonguye.php" method="post">
        <input type="number" name="a" id="a">
        <input type="number" name="b" id="b">
        <input type="number" name="c" id="c">
        <input type="submit" value="nhập" name="return nhap()">
    </form>
    <?php
        if(isset($_POST["nhap"]) && $_POST["nhap"])
        {
            $snta=$_POST["a"];
            $sntb=$_POST["b"];
            $sntc=$_POST["c"];
            $max=$snta;
            if($max<$sntb && $sntb>$sntc)
            {
                $max=$sntb;
                echo"số lớn nhất".$sntb;
            }
            elseif($max<$sntc && $sntb<$sntc)
            {
                $max=$sntc;
                echo"số lớn nhất" .$sntc;
            }
        }
    ?>
<script src="nhapsonguyen.js"></script>
</body>
</html>