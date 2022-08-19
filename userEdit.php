<?php
require_once 'dars1.php';
$id=$_GET['id'];
$ishladi=false;
$message="";
$is_error=false;
if(isset($_POST['user_firstname'])){
    $ishladi=true;
    $firstname=$_POST['user_firstname'];
    $lastname=$_POST['user_lastname'];
    $email=$_POST['user_email'];
    $sql="select * from users where email='$email' and id <>'$id'";
    $result=mysqli_query($conn,$sql);
    if($result->num_rows>0){
        $message="Bu email foydalanilgan!";
        $is_error=true;
    }else{
        $sql="update users set firstname='$firstname',lastname='$lastname',email='$email' where id='$id'";
        $result=mysqli_query($conn,$sql);
        if($result){
            $message="Foydalanuvchi tahrirlandi.";
        }
    }

}

$sql="select * from users where id='$id'";
$result=mysqli_query($conn,$sql);
$user=mysqli_fetch_assoc($result);



?>
<!doctype html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<div class="card">
    <h1 class="text text-primary text-center">Tahrirlash</h1>
    <div class="container ">
        <div class="">
            <a href="users.php" class="btn btn-primary">Orqaga</a>
            <form action="" class="w-50" method="post">

                <div class="mb-3">
                    <label class="form-label">Ism</label>
                    <input type="text" value="<?php echo $user['firstname']; ?>" class="form-control" required name="user_firstname" >
                </div>
                <div class="mb-3">
                    <label  class="form-label">Familya</label>
                    <input type="text" value="<?php echo $user['lastname']; ?>" class="form-control" required name="user_lastname" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" value="<?php echo $user['email'] ; ?>" class="form-control" required name="user_email" >
                </div>

                <button type="submit" class="btn btn-primary">Tahrirlash</button>
            </form>
            <?php
            if($ishladi){
                ?>

                <h3 class="text <?php if($is_error) {echo 'text-danger';} else { echo 'text-success';} ?> "> <?php echo $message ?> </h3>
                <?php
            }
            ?>

        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>

