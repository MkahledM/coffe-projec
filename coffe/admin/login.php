
<?php include('../config/constants.php'); ?>



<html>
    <head>
        <title>login</title>
        <link rel="stylesheet" href="../css/admin.css">
    </head>
    <body>
        <div class="login">
            <h1 class="text-center">login</h1>
            <br><br>
            <?php 
            if(isset($_SESSION['login'])){

               echo  $_SESSION['login'];
               unset($_SESSION['login']);
            }
            if(isset($_SESSION['no-login-message'])){
               echo $_SESSION['no-login-message'];
               unset($_SESSION['no-login-message']);
            }
            
            
            ?>
            <br><br>
            <form action="" method="POST" class="text-center">
                Username:<br>

                <input type="text" name="username" placeholder="enter username"><br><br>

                password:<br>

                <input type="password" name="password" placeholder="enter your password"><br><br>

                <input type="submit" name="submit" value="login" class="btn btn-primary">











            </form>
        </div>
    </body>
</html>



<?php

// if(isset($_post['submit'])){



//     $username = $_post['username'];
//    $password = md5($_post['password']);
//    $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";
//    $res= mysqli_query($conn,$sql);
//    $count = mysqli_num_rows($res);

// if($count==1){

// $_SESSION['login'] = "<div class='success text-center'>login successful</div>";
// $_SESSION['user'] = $username; //check user logged in or not and logout unset it
// header('location:'.SITEURL.'admin/');
// }
// else{
//     $_SESSION['login'] = "<div class='error text-center'> username and password not match </div>";
//     header('location:'.SITEURL.'admin/login.php');
// }
  
// }
?>