
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
            <th>Image</th>
            <th>Date</th>
            <th colspan = '2'>Action</th>
        </tr>
        <?php 
            $id = $_GET['idUpdate'];
            $sql = "SELECT * FROM products WHERE id = $id";
            $results = mysqli_query($connect , $sql);
            while($row = mysqli_fetch_array($results)){
                $imageshow = 'upLoad/'.$row['image'];
                ?>
                <tr>
                    <td><?php echo $row['id']  ?></td>
                    <td><?php echo $row['name']  ?></td>
                    <td><?php echo $row['price']  ?></td>
                    <td> <img id = 'img' src= "<?php echo $imageshow  ?>"> </td>
                    <td><?php echo $row['date']  ?></td>
                    <td> <a href = 'delete.php?iddel=<?php echo $row['id'] ?>'>Delete </a>  </td>
                </tr>
                <div id = form>
                    <form method = 'post' enctype = 'multipart/form-data' id='mainf' >
                                <div> Name : <div> <input type = 'text' name = 'name' value = '<?php echo $row['name'] ?>' ></div> </div>
                                <div> Price:<div> <input type = 'text' name = 'price' value = '<?php echo $row['price'] ?>' ></div> </div>
                                <div>Image: <div><input type = 'file' name = 'image'> </div>
                                <div> <img id = 'img' src = " <?php echo $imageshow ?> " > </div> <br>
                                <div> Date :<div> <input type = 'date' name = 'date' value = '<?php echo $row['date'] ?>' > </div> </div> <br>
                                <div> <input type = 'submit' name = 'update' value = 'Update' id = 'button'> </div> <br>
                                <a href= 'index.php'> <input type = 'button' value = 'Home' id = 'button'> </a>
                    </form>
                 </div>
                
            <?php 
        if(isset($_POST['update'])){
                $image = $row['image'];
                $name = $_POST['name'];
                $price= $_POST['price'];
                $date = $_POST['date'];
                $imageUpload = $_FILES['image'];
                if(!$imageUpload['error']){
                $save = 'upLoad/';
                $imageNew = uniqid().'-'.$imageUpload['name'];
                move_uploaded_file($imageUpload['tmp_name'] , $save.$imageNew);
                $image = $imageNew;
                unlink($imageshow);
                }
                $sql = " UPDATE products SET name = '$name' , price = '$price' , 
                        image = '$image' , date = '$date' WHERE id = '$id' ";
                $query = mysqli_query($connect , $sql);
                header('location:index.php');
                var_dump($image);
            }
        }
            ?>
    </table>
</body>
</html>