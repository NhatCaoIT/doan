<?php 
    session_start();
    if(!$_SESSION['username']){
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
    <H1> Nhập vào Sản phẩm </H1>
    <div id = form>
        <form method = 'post'>
        <div> <h1> Vui lòng nhập số lượng </h1> <div>
        <div>
         <input type = 'text' name = 'quan'> 
         <input type = 'submit' name = 'import' value = 'import' id = 'button'>
         </div> <br>
        <div> <a href = 'billImport.php'> <input type = 'button' value = ' print_bill' id = 'button'> </a> </div> <br> <br>
        <a href = 'index1.php' > <input type = 'button' value = 'BackHome' id  = 'button'>  </a>
        
        
    </div>
    <?php   
        include 'connect.php';
        $id = $_GET['id'];
        $sql = "SELECT * FROM product WHERE ID_product = '$id'";
        $query = mysqli_query($connect , $sql);
        while($row = mysqli_fetch_array($query)){
            $quantityL = $row['quantity'];
        }
        // var_dump($quantityL);
        // var_dump($quantity);
        if(isset($_POST['import'])){
            $quantity = $_POST['quan'];
            if($quantity == ''){
                echo 'vui long nhap so luong!';
            }
            else{
                $quanti =  $quantityL + $quantity;
                // var_dump($quanti);
                $sql = "UPDATE product SET quantity = '$quanti' WHERE ID_product = '$id' ";
                $query = mysqli_query($connect , $sql);
                $_SESSION['kho'] = $quantityL;
                $_SESSION['them'] = $quantity;
                echo 'Nhập kho thành công';
            }
            // var_dump($_SESSION['kho']);
            // var_dump($_SESSION['them']);
            }
     ?>
     <h2> Tồn kho hiện tại là : <?php echo $quantityL ?> </h2>
</body>
</html>