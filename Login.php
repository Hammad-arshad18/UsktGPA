<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comments Details</title>
    <link rel="icon" href="images/uskt.png" sizes="16x16">
    <!-- Style Sheets-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
<!--Info Bar-->
<div class="top-bar container-fluid bg-gradient bg-success text-light text-center text-uppercase">
    <div class="container py-2">
        <div class="heading user-select-none">
            <h5>Welcome To Uskt Gpa Calculator</h5>
        </div>
    </div>
</div>

<!--NavBar-->
<nav class="navbar navbar-expand-lg navbar-expand-sm navbar-dark bg-dark sticky-lg-top">
    <div class="container-fluid">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a href="index.php" class="nav-link" title="Uskt GPA Calculator">Home</a></li>
            <li class="nav-item"><a href="https://www.instagram.com/hammad.arshad18" class="nav-link" target="_blank">Instagram</a></li>
            <li class="nav-item"><a href="https://wa.me/+923328432678" class="nav-link" target="_blank">Whatsapp</a></li>
            <li class="nav-item"><a href="About.php" class="nav-link">About</a></li>
            <?php
            if (isset($_SESSION['username']) && $_SESSION['login']==true){
                echo"<li class='nav-item'><a class='nav-link'>".$_SESSION['username']."</a>
            </li>";
            }
            ?>
        </ul>
        <?php
        if (isset($_SESSION['username']) && $_SESSION['login']==true){
        echo '<div class="logout-btn">
            <a class="btn btn-success bg-gradient" href="Logout.php">Logout</a>
        </div>';
        }
        ?>
    </div>
</nav>

<div class="container">
    <?php
    if (isset($_SESSION['username']) && $_SESSION['login']==true){
        $conn = mysqli_connect('localhost', 'root', '', 'gpa');
        if ($conn) {
            $comment_query = "SELECT * FROM gpa_record";
            $comment_data = mysqli_query($conn, $comment_query);
            while ($data = mysqli_fetch_assoc($comment_data)) {
                echo "<div class='row my-3 py-3 comment_row'>
        <div class='col-sm-2 align-self-center text-center'>
            <img src='images/dummy_image.png' class='img-fluid dummy_image' alt='Image' width='120px'>
        </div>
            <div class='col-sm-10 align-self-center'>
                <h4>" . $data['name'] . "</h4>
                <h6>" . $data['email'] . "</h6>
                <p>" . $data['comment'] . "</p>
            </div>
    </div>";
            }
        }
    }
    else{
        header("location:index.php");
    }
    ?>
</div>


<a href="#" class="btn btn-dark " id="up"><i class="fas fa-chevron-up"></i></a>
<div class="bg-dark bg-gradient text-light py-1 pt-3 footer text-center">

    <p>©2021 || Hammad Arshad</p>
</div>
<script src="Js/bootstrap.bundle.js"></script>
<script src="Js/jquery.js"></script>
</body>
</html>
