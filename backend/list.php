    <?php 
    session_start();
    include 'connect.php';
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
    <form method = 'post'>
        <input  type = 'text' name = 'ID' placeholder = 'nhap ID san pham' size = '40px'>
        <input type = 'submit' name = 'search' value = 'search'  id = 'button'>
        <a href = 'index1.php' > <input type = 'button' value = 'BackHome' id  = 'button'>  </a>
    </form>
    <body>
        <table border = '1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity </th>
                <th>Image</th>
                <th>Detail</th>
                <th colspan = '4'>Action</th>
            </tr>

            <?php 
            $sql = "SELECT * FROM product";
            $results = mysqli_query($connect , $sql);
            while ($row = mysqli_fetch_array($results)) {
                $image = 'upLoad/'.$row['image'];
                ?>
                <tr>
                    <td> <?php echo $row['ID_product'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['price'] ?></td>
                    <td><?php echo $row['quantity'] ?></td>
                    <td> <img id = 'img' src = " <?php echo $image ?> " ></td>
                    <td><?php echo $row['detail'] ?></td>
                    <td> <a href = 'delete.php?iddel=<?php echo $row['ID_product'] ?>'> Delete </a></td>
                    <td> <a href = "update.php?idUpdate=<?php echo ($row['ID_product']) ?>"> Update </a> </td>
                    <td> <a href = "export.php?id=<?php echo ($row['ID_product']) ?>"> Export </a> </td>
                    <td> <a href = "import.php?id=<?php echo ($row['ID_product']) ?>"> Import </a> </td>
                </tr>
            <?php } ?>

        </table>
        <a href = 'add.php'> <input type = 'button' value = 'Add product' id = 'button'> </a>

        <?php 
        if(isset($_POST['search'])){
            $id = $_POST['ID'];
            $sql = " SELECT * FROM product WHERE ID_product = '$id' ";
            $results = mysqli_query($connect , $sql);
            while ($row = mysqli_fetch_array($results)){
                $imageShow = 'upLoad/'.$row['image'];
                
                ?>
                <h1> Ket qua tim kiem </h1>
                <table border = '1'>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th> Quantity </th>
                        <th>Image</th>
                        <th>Detail</th>
                        <th colspan = '4'>Action</th>
                    </tr>
                    <tr>
                        <td> <?php echo $row['ID_product'] ?> </td>
                        <td> <?php echo $row['name'] ?></td>
                        <td><?php echo $row['price'] ?></td>
                        <td><?php echo $row['quantity'] ?></td>
                        <td> <img id='img' src = " <?php echo $imageShow ?>"> </td>
                        <td><?php echo $row['detail'] ?></td>
                        <td> <a href = 'delete.php?iddel=<?php echo $row['ID_product'] ?>'> Delete </a></td>
                        <td> <a href = "update.php?idUpdate=<?php echo ($row['ID_product']) ?>"> Update </a> </td>
                        <td> <a href = "export.php?id=<?php echo ($row['ID_product']) ?>"> Export </a> </td>
                        <td> <a href = "import.php?id=<?php echo ($row['ID_product']) ?>"> Import </a> </td>
                        
                    </tr>
                <?php } } ?>
                

            </table>
            

        </body>
        </html>