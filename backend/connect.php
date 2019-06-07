<?php 
$sever = 'localhost';
$name = 'root';
$password = '';
$db = 'funnyshop';
$connect = mysqli_connect($sever , $name , $password , $db);
if(mysqli_connect_errno()){
    echo 'no connect';
}
else{
    echo'';
}

?>