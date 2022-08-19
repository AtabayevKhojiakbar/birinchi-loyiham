<?php

require_once "dars1.php";

$sql="select * from users";
$result=mysqli_query($conn,$sql);

?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

        <title>Foydalanuvchilar ro'yhati chiqarildi</title>
    </head>
    <body>
    <div class="card">
        <h1 align="center" class="text text-primary">Foydalanuvchilar ro'yhati</h1>
    </div>
    <div class="container card">
        <div class="d-flex justify-content-end"><a href="register.php" class="btn btn-success">Foydalanuvchi qo'shish</a></div>
        <table class="table table-bordered border-1">
            <tr>
                <th >#</th>
                <th>Ism</th>
                <th>Familyasi</th>
                <th>Email</th>
                <th>Sana</th>
                <th>Amal</th>
            </tr>
            <?php
            if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
            ?>
<tr>
    <td><?php echo $row['id'];  $idsi=$row['id'];?></td>
    <td><?php echo $row['firstname'] ?></td>
    <td><?php echo $row['lastname'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['reg_date'] ?></td>
    <td>
        <a href="userEdit.php?id=<?php echo $idsi ?>" class="btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
            </svg></a>

        <a href="userDelete.php?id=<?php echo $idsi ?>"  class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
            </svg></a>

    </td>
</tr>

            <?php


            }
            }
?>
        </table>
    </div>
    </body>
    </html>

<?php
$sql="delete from users where id=6 ";
mysqli_query($conn,$sql);
mysqli_close($conn);
?>
