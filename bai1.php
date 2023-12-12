<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hiển thị tên đăng nhập</h1>
    <form action="" method="post">
        <input type="text" name="name" id="name" placeholder="tên đăng nhập">
        <input type="password" name="password" id="password" placeholder="password">
        <input type="submit" value="Nhập" name="hienthi">
    </form>
    <?php
    if(isset($_POST["hienthi"])&&($_POST["hienthi"]))
    {
        $ten=$_POST["name"];
        $pass=$_POST["password"];
        $kq='<h1>Thông tin đăng nhập';
        $kq.="$ten"." "."$pass";
        echo $kq;
    }
    ?>
</body>
</html>