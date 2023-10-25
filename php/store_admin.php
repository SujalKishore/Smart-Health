<?php

@include 'config.php';

session_start();

if(isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/store.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

</head>
<body>
    <section id="menu">
        <div class="logo">
            <img src="css/logo.jpeg" alt="LOGO">
            <h2>SmartHealth</h2>
        </div>

        <div class="items">
            <li><i class="fa fa-heartbeat" aria-hidden="true"></i><a href="admin_page.php">Patients</a></li>
            <li><i class="fa fa-shopping-cart" aria-hidden="true"></i><a href="store_admin.php">Store</a></li>
            <li><i class="fa fa-sign-out" aria-hidden="true"></i><a href="logout.php">Sign Out</a></li>
        </div>
    </section>

    <section id="interface">
        <div class="navigation">
            <div class="n1">
                <div>
                    <i id="menu-btn" class="fas fa-bars"></i>
                </div>
                <div class="search">
                    <i class="far fa-search"></i>
                    <input type="text" placeholder="Search">
                </div>
            </div>

            <div class="profile">
                <i class="far fa-bell"></i>
                <img src="css/dc.png" alt="">
            </div>
        </div>
        <h3 class="i-name">
            Store
        </h3>
        <div class="values">
            <div class="val-box">
                <img src="css/st.png">
                <div><h3>&nbsp;&nbsp;Stethoscope</h3><span><a href="https://www.amazon.in/Stethoscopes/b?ie=UTF8&node=3150035031">&nbsp;&nbsp;&nbsp;Visit Link</a></span></div>
            </div>&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="val-box">
                <img src="css/meds.jpg">
                <div><h3>&nbsp;Medicine</h3><span><a href="https://www.google.com/search?q=medicine+shop+near+me&sca_esv=571840155&bih=707&biw=1536&rlz=1C1RXQR_enIN1058IN1058&hl=en&sxsrf=AM9HkKmHL6OnvTCqjpDbgCB8zj6MkC1quA%3A1696851736906&ei=GOcjZe_eNqySseMP5pyzyAY&oq=medicine+shop+nea&gs_lp=Egxnd3Mtd2l6LXNlcnAiEW1lZGljaW5lIHNob3AgbmVhKgIIADIKEAAYgAQYFBiHAjIKEAAYgAQYFBiHAjIFEAAYgAQyBRAAGIAEMgUQABiABDIFEAAYgAQyBRAAGIAEMgUQABiABDIFEAAYgAQyBRAAGIAESOoJUMgCWO4HcAF4AZABAJgBsAKgAYAHqgEHMC4yLjEuMbgBAcgBAPgBAcICBxAjGLADGCfCAgoQABhHGNYEGLADwgIKEAAYigUYsAMYQ8ICDhAAGOQCGNYEGLAD2AEBwgIWEC4YigUYxwEY0QMYyAMYsAMYQ9gBAuIDBBgAIEGIBgGQBhK6BgYIARABGAm6BgYIAhABGAg&sclient=gws-wiz-serp">&nbsp;&nbsp;&nbsp;Visit Link</a></span></div>
            </div>&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="val-box">
                <img src="css/mask.png">
                <div><h3>&nbsp;&nbsp;&nbsp;Masks</h3><span><a href="https://www.amazon.in/mask/s?k=mask">&nbsp;&nbsp;&nbsp;&nbsp;Visit Link</a></span></div>
            </div>&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="val-box">
                <img src="css/hm.png">
                <div><h3>&nbsp;Health Monitors</h3><span><a href="https://www.amazon.in/Health-Monitors/b?ie=UTF8&node=3150029031">&nbsp;&nbsp;&nbsp;&nbsp;Visit Link</a></span></div>
            </div>
        </div>

        
    </section>

    <script>
        $('#menu-btn').click(function(){
            $('#menu').toggleClass("active");
        })
    </script>


</body>
</html>