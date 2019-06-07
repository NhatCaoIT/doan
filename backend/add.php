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
    <h1> Add products </h1>
    <div id = 'form' >
        <form method = 'post' enctype = "multipart/form-data" id = 'mainf'>
            <div> Name : </div>
            <div> <input type = 'text' name = 'name'> </div>
            <div> Price : </div>
            <div> <input type = 'text' name = 'price'> </div>
            <div> Image : </div>
            <div> <input type = 'FILE' name = 'image'> </div>
            <div> Quantity : </div>
            <div> <input type= 'text' name = 'quan'> </div>
            <div> Ditail : </div>
            <div> <input type = 'text' name = 'detail'> </div> <br>
             <div> ID_group : </div>
            <div> <input type = 'text' name = 'ID'> </div> <br>

            <div> <input type = 'submit' name = 'add' value ='add' id = 'button'> </div> <br><br><br>
            <a href = 'list.php'> <input type = 'button' value = 'List product' id = 'button'> </a>
        </form>
    </div>
    <?php
if ($_SESSION['username'] == 'admin') {
	if (isset($_POST['add'])) {
		$imageUpload = $_FILES['image'];
		$name = $_POST['name'];
		$price = $_POST['price'];
		$detail = $_POST['detail'];
		$save = 'upLoad/';
		$quantity = (int) $_POST['quan'];
		$image = uniqid() . '-' . $imageUpload['name'];
		$id = $_POST['ID'];
		move_uploaded_file($imageUpload['tmp_name'], $save . $image);
		if ($quantity <= 0) {
			echo 'Vui lòng nhập số lượng lớn hơn 1';
		} else {
			$sql = "INSERT INTO product( name , price, image ,quantity , detail, ID_group)
                VALUE('$name' , '$price'  ,'$image',$quantity , '$detail' , '$id' )";
			$query = mysqli_query($connect, $sql);
			header('location:index1.php');
			var_dump($id);
		}

	}
}
?>
</body>
</html>