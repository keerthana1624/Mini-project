<?php
$conn=mysqli_connect("localhost","root","","website");
if($conn==false){
    die("connection error");
}
if(isset($_GET['deleteid'])){

    $id=$_GET['deleteid'];

    $sql="delete  from product_table where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:index.php');
    }
    else{
        die(mysqli_error($conn));
    }
}
?>