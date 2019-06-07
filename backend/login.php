<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body id='login'>
    <h1> DANG NHAP </h1>
    <div id = 'form' >
        <form method = 'post' >
            <div> Username : </div>
            <div> <input type ='text' name = 'username' placeholder = 'Ten dang nhap'> </div>
            <div> Password </div>
            <div><input type ='text' name = 'password' placeholder = 'Mat khau dang nhap'> </div> <br>
            <div> <input type = 'submit' name = 'login' value = 'Login' id = 'button'> </div> <br>
            <a href = 'http://localhost:88/doanthuattoan' > <input type = 'button' value = 'Trang chủ' id = 'button'> </a>
        </form>
    </div>
    <?php
include 'connect.php';
if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$pass = $_POST['password'];
	$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$pass' ";
	$query = mysqli_query($connect, $sql);
	$row = mysqli_num_rows($query);
	if ($row == 0) {

	} else {
		$_SESSION['username'] = $username;
		header('location:index1.php');
	}
}
?>
</body>
</html>