<?php
include 'connect.php';
session_start();
var_dump($_SESSION['username']);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Del</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
if ($_SESSION['username'] == 'admin') {
	$ID = $_GET['iddel'];
	$sql = "DELETE  FROM product WHERE ID_product = $ID";
	$query = mysqli_query($connect, $sql);
	header('location:index1.php');
}

?>
</body>
</html>