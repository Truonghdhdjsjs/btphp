<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Phương trình bật 1
    </h1>
    <form action="" method="post">
        <input type="number" name="a" id="a" placeholder="Nhập a">
        <input type="number" name="b" id="b" placeholder="Nhập b">
        <input type="submit" value="Nhập" name="hienthi">
    </form>
    <?php
        if(isset($_POST["hienthi"])&&($_POST["hienthi"]))
        {
            $biena=$_POST["a"];
            $bienb=$_POST["b"];
            if($biena==0)
            {
                 $kq="Phương trình vô nghiệm";
            }
            else
            {
                $kq='Phương trình có nghiệm là ';
                $kq.=".-$bienb/$biena.";
            }
            echo $kq;
        }
    ?>
</body>
</html>