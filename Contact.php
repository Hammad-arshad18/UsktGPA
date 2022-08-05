<!--PHP Start-->
<?php
$conn = mysqli_connect('localhost','root','','gpa');
if ($conn) {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $uname = $_POST["uname"];
        $email = $_POST['email'];
        $comment = $_POST['comment'];
        $que = "INSERT INTO `gpa_record` (`name`, `email`, `comment`) VALUES ('$uname','$email','$comment')";
        mysqli_query($conn, $que);
    }
} else {
    die("Connection Failed" . mysqli_connect_error());
}
?>
<!--PHP End-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
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
        </ul>
    </div>
</nav>

<!--Contact Us-->
<div class="container py-4">
    <h1 class="text-center pt-3">Contact Us</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="post" action="" autocomplete="off" class="mb-3">
                <label class="form-text" for="uname">Name</label>
                <input type="text" class="form-control" name="uname" id="uname" required>
                <label class="form-text" for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
                <label class="form-text" for="comment">Comment</label>
                <textarea class="form-control" name="comment" cols="30" rows="5" id="comment" required></textarea>
                <button class="btn btn-success bg-gradient my-3 float-end" type="submit" id="submit">Submit</button>
            </form>
        </div>
    </div>

</div>

<a href="#" class="btn btn-dark " id="up"><i class="fas fa-chevron-up"></i></a>
<?php include "Footer.php"; ?>
<script src="Js/jquery.js"></script>
</body>
</html>
