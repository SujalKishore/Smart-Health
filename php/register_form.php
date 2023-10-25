<?php

@include 'config.php';

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];

    $select = " SELECT * FROM portal WHERE email = '$email'  && password = '$pass'";
    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        
        $error[] = 'Email Already in Use.';
         
    }else{
        if($pass!=$cpass){
            $error[] = "Password does not Match";
        }else{
            $insert = "INSERT INTO portal(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
            mysqli_query($conn, $insert);
            header('location:login_form.php');
        }
    }
    if(mysqli_errno($conn)==1062)
        echo "Duplicate Entry";
    else
        echo "Error".$query."br";

};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>

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
    <div class="content">
        <h2>Smart Healthcare Register</h2>
        <br><p>Register now to gain access to the most Organized and Smart <br> Healthcare Management Portal.</p>
    </div>
    <form action="" method="post">
        <h3>Register</h3>
        <?php
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };
        ?>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="name" name="name" required placeholder="Enter your Name">
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="email" required placeholder="Enter your Email">
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" required placeholder="Enter your Password">
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="cpassword" required placeholder="Confirm your Password">
                </div>
                <select name="user_type" id="">
                    <option value="User">Patient</option>
                    <option value="Admin">Doctor</option>
                </select>
                <input type="submit" name="submit" value="Register Now" class="form-btn">
                <div class="register-link">
                    <p>Already a User?<a href="login_form.php">Log In</a></p>
                </div>
                
    </form>
    

</div>
    
</body>
</html>