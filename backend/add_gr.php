<?php include 'connect.php';
session_start();
if (!$_SESSION['username']) {
	header('location:login.php');
}
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
<body>
    <h1> Add group product </h1>
    <div id = 'form' >
        <form method = 'post' enctype = "multipart/form-data" id = 'mainf'>
            <div> Name : </div>
            <div> <input type = 'text' name = 'name'> </div>
            <div> Status : </div>
            <div> <input type = 'text' name = 'status'> </div>
            <div> <input type = 'submit' name = 'add' value ='add' id = 'button'> </div> <br><br><br>
            <a href = 'list_gr.php'> <input type = 'button' value = 'List product' id = 'button'> </a>
        </form>
    </div>
    <?php
if (isset($_POST['add'])) {
	$name = $_POST['name'];
	$status = $_POST['status'];

	$sql = "INSERT INTO group_product( name ,status)
                VALUE('$name' , '$status' )";
	$query = mysqli_query($connect, $sql);
	// header('location:index1.php');

}
?>
</body>
</html>