<?php
     include 'backend/connect.php';
    session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Login</title>
</head>
<body>
    <div id="loginn">
        <h1> Đăng nhập </h1>
        <form method="post" >
        <div> Tên đăng nhập :   <input type="text" name="name" placeholder="username"> </div>
        <div> Mật khẩu :   <input type="password" name="pass" placeholder="password"> </div>
        <div> Mật khẩu 2 :   <input type="password" name="pass2" placeholder="Neu ban la quan tri vien"> </div>

        <div> <input type="submit" name="login" value="LOGIN" > </div>
        </form>
    </div>
    <?php
        if(isset($_POST['login'])){
            $name = $_POST['name'];
            $pass = $_POST['pass'];
            $pass2= $_POST['pass2'];
            $sql = "SELECT * FROM users";
            $query = mysqli_query($connect , $sql);
            while($row =  mysqli_fetch_array($query)){
             if($name == $row['username'] && $pass == $row['password'] && $pass2 != $row['roles']){
                 header('location: index.php');
                 $_SESSION['username'] = $row['username'];
             }
             elseif($name == $row['username'] && $pass == $row['password'] && $pass2 == $row['roles']){
                 header('location: backend/index1.php');
             }
            }

        }
    ?>
</body>
</html>