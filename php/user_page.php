<?php

@include 'config.php';

session_start();

if(isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/admin2.css">
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
            <li><i class="fa fa-heartbeat" aria-hidden="true"></i><a href="user_page.php">Doctors</a></li>
            <li><i class="fa fa-shopping-cart" aria-hidden="true"></i><a href="store_user.php">Store</a></li>
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
                <img src="css/user.jpg" alt="">
            </div>
        </div>
        <h3 class="i-name">
            Contact Doctor
        </h3>
        <div class="values">
            <div class="val-box">
                <i class="fa fa-user-md" aria-hidden="true"></i>
                <div><h3>6</h3><span>Available Doctors</span></div>
            </div>
        </div>

        <dir class="board">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Contact No.</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="people">
                            <img src="css/dc.png" alt="user">
                            <div class="people-de">
                                <h5>Doctor 1</h5>
                                <p>doctor@example.com</p>
                            </div>
                        </td>
                        <td class="people-des">
                           <h5>+91 9876543210</h5>
                        </td>
                        <td class="edit"><a href="doctor.html">View Profile</a></td>
                    </tr>
                    <tr>
                        <td class="people">
                            <img src="css/dc.png" alt="user">
                            <div class="people-de">
                                <h5>Doctor 2</h5>
                                <p>doctor@example.com</p>
                            </div>
                        </td>
                        <td class="people-des">
                           <h5>+91 9876543210</h5>
                        </td>
                        <td class="edit"><a href="doctor2.html">View Profile</a></td>
                    </tr><tr>
                        <td class="people">
                            <img src="css/dc.png" alt="user">
                            <div class="people-de">
                                <h5>Doctor 3</h5>
                                <p>doctor@example.com</p>
                            </div>
                        </td>
                        <td class="people-des">
                           <h5>+91 9876543210</h5>
                        </td>
                        <td class="edit"><a href="doctor3.html">View Profile</a></td>
                    </tr>
                    <tr>
                        <td class="people">
                            <img src="css/dc.png" alt="user">
                            <div class="people-de">
                                <h5>Doctor 4</h5>
                                <p>doctor@example.com</p>
                            </div>
                        </td>
                        <td class="people-des">
                           <h5>+91 9876543210</h5>
                        </td>
                        <td class="edit"><a href="doctor4.html">View Profile</a></td>
                    </tr>
                    <tr>
                        <td class="people">
                            <img src="css/dc.png" alt="user">
                            <div class="people-de">
                                <h5>Doctor 5</h5>
                                <p>doctor@example.com</p>
                            </div>
                        </td>
                        <td class="people-des">
                           <h5>+91 9876543210</h5>
                        </td>
                        <td class="edit"><a href="doctor5.html">View Profile</a></td>
                    </tr>
                    <tr>
                        <td class="people">
                            <img src="css/dc.png" alt="user">
                            <div class="people-de">
                                <h5>Doctor 6</h5>
                                <p>doctor@example.com</p>
                            </div>
                        </td>
                        <td class="people-des">
                           <h5>+91 9876543210</h5>
                        </td>
                        <td class="edit"><a href="doctor6.html">View Profile</a></td>
                    </tr>
                </tbody>
            </table>
        </dir>
    </section>

    <script>
        $('#menu-btn').click(function(){
            $('#menu').toggleClass("active");
        })
    </script>


</body>
</html>