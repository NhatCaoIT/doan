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
    <title>Bill</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
    <body >
        <div id = 'form'>
            <h1> HÓA ĐƠN XUẤT NHẬP KHO </h1>
            <?php
                include 'connect.php';
                // $quan1 = $_SESSION['kho'];
                // $quan2 = $_SESSION['nhap'];
                $id  = $_SESSION['id'];
                $sql = "SELECT * FROM products WHERE id = $id";
                $query = mysqli_query($connect , $sql);
                while($row = mysqli_fetch_array($query)){
                    $name = $row['name'];
                    $price = $row['price'];
                    $quantity = $row['quantity'];
                    $image = 'upLoad/'.$row['image'];
                    $priceT = $price * $quantity;
                }
            ?>
            <div> Tên sản phẩm : <?php echo $name ?> </div> <br>
            <div> <img style='width:150px' src =" <?php echo $image ?>" > </div>
            <div> Giá : <?php echo $price ?> </div><br>
            <div> Số lượng tồn kho ban đầu : <?php   ?> </div><br>
            <div> Số lượng vừa nhập kho : <?php  ?> </div><br>
            <div> Số lượng tại thời điểm hiện tại : <?php echo $quantity ?> </div><br>
            <div> Thành tổng tiền : <?php echo $priceT  ?></div>
         
        <br>
        <a href= 'index1.php'> <input type = 'button' value = 'Home' id = 'button'> </a>
        </div>
        
    
</body>
</html>