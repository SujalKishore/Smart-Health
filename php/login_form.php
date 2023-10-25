<?php

@include 'config.php';
-
session_start();

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $select = " SELECT * FROM portal WHERE email = '$email'  && password = '$pass' ";
    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        
        $row = mysqli_fetch_array($result);

        if($row['User_Type'] == 'Admin'){
            $_SESSION['admin_name'] = $row['name'];
            header('location:admin_page.php');
        }elseif($row['User_Type'] == 'User'){
            $_SESSION['user_name'] = $row['name'];
            header('location:user_page.php');
        }


    }else{
        $error[] = 'Incorrect Email or Password';
    }
    
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="header">
        <a href="register_form.php" class="logo"><ion-icon name="medkit"></ion-icon>SmartHealth</a>
        <nav class="nav">
            <a href="about.html">About</a>
            <a href="register_form.php">Sign Up</a>
            <a href="login_form.php">Sign In</a>
        </nav>
</header>
<div class="form-container">
    <div class="content_l">
        <h2>Smart Healthcare Login</h2>
        <br><p>Logon back to your Healthcare Portal.<br>Check out our new Store Feature.</p>
    </div>
    <form action="" method="post">
        <h3>Login</h3>
        <?php
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };
        ?>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="email" required placeholder="Enter your Email">
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" required placeholder="Enter your Password">
                </div>
                <input type="submit" name="submit" value="Login" class="form-btn">
                <div class="Forgot Password">
                    <p><a href="index.html">Forgot Password</a></p>
                </div>
                <div class="register-link">
                    <p>Don't have an Account?<a href="register_form.php">Register</a></p>
                </div>
                
    </form>

</div>
    
</body>
</html>