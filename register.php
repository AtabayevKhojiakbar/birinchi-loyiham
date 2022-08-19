<?php
require_once "dars1.php";
$ishladi=false;
$is_error=false;
$message="";
if(isset($_POST['user_firstname'])){
    $firstname=$_POST['user_firstname'];
    $lastname=$_POST['user_lastname'];
    $email=$_POST['user_email'];

    $sql="select * from users where email='$email'";
    $result=mysqli_query($conn,$sql);
    if($result->num_rows ==0){
        $sql="insert into users (firstname,lastname,email) values ('$firstname','$lastname','$email')";
        $ishladi=mysqli_query($conn,$sql);
        $message=$firstname." nomli yangi foydalanuvchi yaratildi";
    }else{
        $is_error=true;
        $ishladi=true;
        $message=$email." emaili allaqachon foydalanilgan. iltimos boshqa email kiriting";
    }

}

?>

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
<h1 class="text text-primary text-center">Mening birinchi saytimdan ro'yhatdan o'tish</h1>
    <div class="container ">
        <div class="">
            <a href="users.php" class="btn btn-primary">Orqaga</a>

            <form action="" class="w-50" method="post">

            <div class="mb-3">
                <label class="form-label">Ismingizni kiriting</label>
                <input type="text" value="<?php if($is_error) {echo $firstname;} ?>" class="form-control" required name="user_firstname" >
            </div>
            <div class="mb-3">
                <label  class="form-label">Familyangizni kiriting</label>
                <input type="text" value="<?php if($is_error) {echo $lastname;} ?>" class="form-control" required name="user_lastname" >
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email kiriting</label>
                <input type="email" value="<?php if($is_error) {echo $email;} ?>" class="form-control" required name="user_email" >
            </div>

            <button type="submit" class="btn btn-primary">Ro'yhatdan o'tish</button>
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
