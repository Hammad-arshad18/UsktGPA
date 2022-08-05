<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="icon" href="images/uskt.png" sizes="16x16">
    <!-- Style Sheets-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>
    <div class="top-bar container-fluid bg-gradient bg-success text-light text-center text-uppercase">
        <div class="container py-2">
            <div class="heading user-select-none">
                <h5>Welcome To Uskt Gpa Calculator</h5>
            </div>
        </div>
        </div>
        
            <nav class="navbar navbar-expand-lg navbar-expand-sm navbar-dark bg-dark sticky-lg-top">
                <div class="container-fluid">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link"  title="Uskt GPA Calculator">Home</a></li>
                    <li class="nav-item"><a href="https://www.instagram.com/hammad.arshad18" class="nav-link" target="_blank">Instagram</a></li>
                    <li class="nav-item"><a href="https://wa.me/+923328432678" class="nav-link" target="_blank">Whatsapp</a></li>
                    <li class="nav-item"><a href="Contact.php" class="nav-link">Contact Us</a></li>
                </ul>
                </div>
            </nav>

                <div class="container py-4 user-select-none">
                    <h1 class="text-center pb-3">About Me</h1>
                <div class="row">
                    <div class="col-md-4">
                    <img src="images/Hammad.jpg" alt="Image" class="img-fluid border border-1 border-dark">
                    </div>
                    <div class="col-md-8 about-desc">
                        <h1>Hammad Arshad</h1>
                        <p class="w-75 ">My name is Hammad Arshad from Sialkot Punjab Pakistan.
                            I’m a student of Software Engineering.
                            The objective of my life is to become a successful developer.
                            I want to do work for my field to develop something new that might be helpful in future.
                            I’ve an expertise in front end web development & I’m working on backend development sooner
                            or later I’ll be able to do full Stack Web Development. Moreover, The Taste of Development
                            That I like is Android App Development Using Flutter & Firebase Database. Watching Movies,
                            Seasons & Learning New & More Technologies/Languages are My Hobbies..
                        </p>
                    </div>
                </div>
            </div>
    <a href="#" class="btn btn-dark " id="up"><i class="fas fa-chevron-up"></i></a>
    <div class="bg-dark bg-gradient text-light py-1 pt-3 footer text-center">

        <p>©2021 || Hammad Arshad</p>

    </div>
    <script src="Js/jquery.js"></script>
    <script>
        $(document).ready(function(){$(window).scroll(function(){$(window).scrollTop()>100?$("#up").fadeIn():$("#up").fadeOut()})});
    </script>
</body>
</html>