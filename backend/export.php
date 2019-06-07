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
    <H1> Xuất Sản phẩm </H1>
    <div id = form>
        <form method = 'post'>
            <div> <h1> Vui lòng nhập số lượng </h1> <div>
                <div>
                   <input type = 'text' name = 'quan'> 
                   <input type = 'submit' name = 'export' value = 'export' id = 'button'>
               </div> <br>
               <div> <a href = 'bill.php'> <input type = 'button' name = 'bill' value = ' print_bill' id = 'button'> </a> </div> <br> <br>
               <a href = 'index1.php' > <input type = 'button' value = 'BackHome' id  = 'button'>  </a>
               <br> 
           </form> <br>
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
    if(isset($_POST['export'])){
        $quantity = $_POST['quan'];
        if($quantity > $quantityL || $quantity == ''){
            echo ' Số lượng nhập vào phải nhỏ hơn số lượng tồn kho và không được để trống ';
        }
        else{
            $_SESSION['quantity0'] = $quantityL;
            $_SESSION['quantity1'] = $quantity;
            $_SESSION['id'] = $id;
            $quanti =  $quantityL - $quantity;
            // var_dump($quanti);
            $sql = "UPDATE product SET quantity = '$quanti' WHERE ID_product = '$id' ";
            $query = mysqli_query($connect , $sql);
            echo 'Xuất kho thành công';
        }
            // var_dump($_SESSION['id']);
            // var_dump($_SESSION['quantity0']);
    }
    ?>
    <h2> Tồn kho hiện tại là : <?php echo $quantityL ?> </h2>
</body>
</html>