<?php
include'connection.php';

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
    $username=$_POST["username"];
    $password=$_POST["password"];
    $sql1="select usertype from loginform where username='".$username."' AND password='".$password."'";
    $result=mysqli_query($conn,$sql1);
    $row=mysqli_fetch_array($result);

    
    if($row['usertype']=='1')
    {
        header('location:Adminlogin.php');
    }
    elseif($row['usertype']=='2')
    {
        header('location:userlogin.php');
    }
    elseif($row['usertype']=='3')
    {
        header('location:Serviceengineer.php');
    }
    else
    {
        echo'username or password is incorrect';
    }
}

?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Webpage home design</title>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
    <div class='main'>
        <div class='navbar'>

            <div class='icon'>
                <h2 class'logo'>logo</h2>
            </div>

            <div class='menu'>
                <ul>
                    <li><a href='#'>HOME</a></li>
                    <li> <a href='#'>ABOUT</a></li>
                    <li> <a href='#'>SERVICE</a></li>
                    <li><a href='#'>DESIGN</a></li>
                    <li><a href='#'>CONTACT</a></li>
                </ul>
            </div>
         </div>

        <div class='content'>
            <h1>CAR SHOWROOM SERVICE & MANAGEMENT SYSTEM<h1>




            <div class ='file'>
                <form action='#' method='POST'>
                <h2>Login Here</h2>
                <input type='text' name='username' id='username' placeholder='Enter Username'>
                <input type='password' name='password' id='password' placeholder='Enter Password ''>
                <?php
                <button class='btn' name='submit'>Login</button>

                <p class='link'>Don't have an account<br>
                <a href='#'>Sign up</a> here</a></p>
                <p class='liw'>Log in with</p>
                <div class='icons'>
                    <a href='#'><ion-icon name='logo-facebook'></ion-icon></a>
                    <a href='#'><ion-icon name='logo-instagram'></ion-icon></a>
                    <a href='#'><ion-icon name='logo-twitter'></ion-icon></a>
                    <a href='#'><ion-icon name='logo-google'></ion-icon></a>
                    <a href='#'><ion-icon name='logo-skype'></ion-icon></a>
                </div>
                </form>
            </div>
        </div>
        
        </div>
        <script src='https://unpkg.com/ionicons@5.4.0/dist/ionicons.js'></script>
</body>
</html>