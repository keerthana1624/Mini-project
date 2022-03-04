<?php
$conn=mysqli_connect("localhost","root","","website");
session_start();
if($conn==false){
    die("connection error");
}