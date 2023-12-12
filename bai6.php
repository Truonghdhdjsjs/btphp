<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="a" id=""><br>
        <input type="number" name="b" id=""><br>
        <input type="number" name="c" id=""><br>
        <input type="number" name="d" id=""><br>
        <input type="number" name="f" id="">
        <input type="submit" value="tính" name="hienthi">
    </form>
    <?php
    //  if(isset($_POST["hienthi"])&&($_POST["hienthi"]))
    //  {
    //     $a=$_POST["a"];
    //     $b=$_POST["b"];
    //     $c=$_POST["c"];
    //     $d=$_POST["d"];
    //     $f=$_POST["f"];
    //     $kq=max($a,$b,$c,$d,$f);
    //     echo 'kết quả la'.$kq;
    //  }
    if(isset($_POST["hienthi"])&&($_POST["hienthi"]))
    {
       $a=$_POST["a"];
       $b=$_POST["b"];
       $c=$_POST["c"];
       $d=$_POST["d"];
       $f=$_POST["f"];
       $kq=min($a,$b,$c,$d,$f);
       echo 'kết quả la'.$kq;
    }
    ?>
</body>
</html>