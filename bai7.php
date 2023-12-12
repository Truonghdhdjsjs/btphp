<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="a" id="">
        <input type="number" name="b" id="">
        <input type="number" name="c" id="">
        <input type="number" name="d" id="">
        <input type="number" name="f" id="">
        <input type="submit" value="Nhập" name="hienthi">
    </form>
    <?php
        if(isset($_POST["hienthi"]) && $_POST["hienthi"] )
        {
            $a=$_POST["a"];
            $b=$_POST["b"];
            $c=$_POST["c"];
            $d=$_POST["d"];
            $f=$_POST["f"];
            $kq=($a+$b+$c+$d+$f)/5;
            echo $kq;
        }
    ?>
</body>
</html>