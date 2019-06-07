
<?php 
include 'connect.php';
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
    <title>update</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <H1>  Update products</H1>
    <table border = '1'>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th> Quantity </th>
            <th>Image</th>
            <th>Detail</th>
            <th colspan = '2'>Action</th>
        </tr>
        <?php 
        $id = $_GET['idUpdate'];
        $sql = "SELECT * FROM product WHERE ID_product = $id";
        $results = mysqli_query($connect , $sql);
        while($row = mysqli_fetch_array($results)){
            $imageshow = 'upLoad/'.$row['image'];
            ?>
            <tr>
                <td><?php echo $row['ID_product']  ?></td>
                <td><?php echo $row['name']  ?></td>
                <td><?php echo $row['price']  ?></td>
                <td><?php echo $row['quantity']  ?></td>
                <td> <img id = 'img' src= "<?php echo $imageshow  ?>"> </td>
                <td><?php echo $row['detail']  ?></td>
                <td> <a href = 'delete.php?iddel=<?php echo $row['id'] ?>'>Delete </a>  </td>
            </tr>
            <div id = form>
                <form method = 'post' enctype = 'multipart/form-data' id='mainf' >
                    <div> Name : <div> <input type = 'text' name = 'name' value = '<?php echo $row['name'] ?>' ></div> </div>
                    <div> Price:<div> <input type = 'text' name = 'price' value = '<?php echo $row['price'] ?>' ></div> </div>
                    <div> Quantity:<div> <input type = 'text' name = 'quan' value = '<?php echo $row['quantity'] ?>' ></div> </div>
                    <div>Image: <div><input type = 'file' name = 'image'> </div>
                    <div> <img id = 'img' src = " <?php echo $imageshow ?> " > </div> <br>
                    <div> Detail :<div> <input type = 'text' name = 'detail' value = '<?php echo $row['detail'] ?>' > </div> </div> <br>
                    <div> <input type = 'submit' name = 'update' value = 'Update' id = 'button'> </div> <br>
                    <a href= 'index1.php'> <input type = 'button' value = 'Home' id = 'button'> </a>
                </form>
            </div>

            <?php 
            if(isset($_POST['update'])){
                $image = $row['image'];
                $name = $_POST['name'];
                $quantity = $_POST['quan'];
                $price= $_POST['price'];
                $date = $_POST['detail'];
                $imageUpload = $_FILES['image'];
                if(!$imageUpload['error']){
                    $save = 'upLoad/';
                    $imageNew = uniqid().'-'.$imageUpload['name'];
                    move_uploaded_file($imageUpload['tmp_name'] , $save.$imageNew);
                    $image = $imageNew;
                    unlink($imageshow);
                }
                $sql = " UPDATE product SET name = '$name' , price = '$price' , 
                image = '$image' , detail = '$date' , quantity = '$quantity' WHERE ID_product = '$id' ";
                $query = mysqli_query($connect , $sql);
                header('location:index1.php');
                var_dump($image);
            }
        }
        ?>
    </table>
</body>
</html>