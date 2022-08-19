<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<script>
    alert("Bu foydalanuvchi o'chirilmoqda");
</script>
</body>
</html>
<?php
require_once "dars1.php";
$id=$_GET['id'];

$sql="delete from users where id='$id'";
$result=mysqli_query($conn,$sql);
if($result){


header("location:users.php");
}{
    echo mysqli_error();
}