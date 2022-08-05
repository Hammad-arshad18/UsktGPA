<?php
$conn = mysqli_connect('localhost', 'root', '', 'gpa');
if ($conn) {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $login_uname = $_POST['login_name'];
        $login_password = $_POST['login_pass'];
        session_start();
        $_SESSION['login']=true;
        $_SESSION['username']=$login_uname;
        $login_query = "SELECT * FROM gpa_login where uname='" . $login_uname . "' AND password='" . $login_password . "'";
        $exe_query = mysqli_query($conn, $login_query);
        if (mysqli_num_rows($exe_query) == 1) {
            header('location:/GPA/Login.php');
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>You\'ve Enter!</strong> Wrong UserName Or Password
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
        }
    }
} else {
    die(mysqli_connect_error());
}
$conn->close();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>USKT GPA CALCULATOR</title>
    <link rel="icon" href="images/uskt.png" sizes="16x16">
    <!-- Style Sheets-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <meta content='University of Sialkot, Uskt, CGPA Calculator, GPA calculator,
USKT GPA calculator, USKT CGPA Calculator,USKT gpa, gpa uskt,uskt,USKT, GPA calculator uskt, uskt gpa calsulator,
USKT,USKT,USKT,
USKT,USKT,CGPA,
USKT,USKT,GPA,
USKT,USKT,Calculator,
USKT,USKT,free,
USKT,CGPA,USKT,
USKT,CGPA,CGPA,
USKT,CGPA,GPA,
USKT,CGPA,Calculator,
USKT,CGPA,free,
USKT,GPA,USKT,
USKT,GPA,CGPA,
USKT,GPA,GPA,
USKT,GPA,Calculator,
USKT,GPA,free,
USKT,Calculator,USKT,
USKT,Calculator,CGPA,
USKT,Calculator,GPA,
USKT,Calculator,Calculator,
USKT,Calculator,free,
USKT,free,USKT,
USKT,free,CGPA,
USKT,free,GPA,
USKT,free,Calculator,
USKT,free,free,
CGPA,USKT,USKT,
CGPA,USKT,CGPA,
CGPA,USKT,GPA,
CGPA,USKT,Calculator,
CGPA,USKT,free,
CGPA,CGPA,USKT,
CGPA,CGPA,CGPA,
CGPA,CGPA,GPA,
CGPA,CGPA,Calculator,
CGPA,CGPA,free,
CGPA,GPA,USKT,
CGPA,GPA,CGPA,
CGPA,GPA,GPA,
CGPA,GPA,Calculator,
CGPA,GPA,free,
CGPA,Calculator,USKT,
CGPA,Calculator,CGPA,
CGPA,Calculator,GPA,
CGPA,Calculator,Calculator,
CGPA,Calculator,free,
CGPA,free,USKT,
CGPA,free,CGPA,
CGPA,free,GPA,
CGPA,free,Calculator,
CGPA,free,free,
GPA,USKT,USKT,
GPA,USKT,CGPA,
GPA,USKT,GPA,
GPA,USKT,Calculator,
GPA,USKT,free,
GPA,CGPA,USKT,
GPA,CGPA,CGPA,
GPA,CGPA,GPA,
GPA,CGPA,Calculator,
GPA,CGPA,free,
GPA,GPA,USKT,
GPA,GPA,CGPA,
GPA,GPA,GPA,
GPA,GPA,Calculator,
GPA,GPA,free,
GPA,Calculator,USKT,
GPA,Calculator,CGPA,
GPA,Calculator,GPA,
GPA,Calculator,Calculator,
GPA,Calculator,free,
GPA,free,USKT,
GPA,free,CGPA,
GPA,free,GPA,
GPA,free,Calculator,
GPA,free,free,
Calculator,USKT,USKT,
Calculator,USKT,CGPA,
Calculator,USKT,GPA,
Calculator,USKT,Calculator,
Calculator,USKT,free,
Calculator,CGPA,USKT,
Calculator,CGPA,CGPA,
Calculator,CGPA,GPA,
Calculator,CGPA,Calculator,
Calculator,CGPA,free,
Calculator,GPA,USKT,
Calculator,GPA,CGPA,
Calculator,GPA,GPA,
Calculator,GPA,Calculator,
Calculator,GPA,free,
Calculator,Calculator,USKT,
Calculator,Calculator,CGPA,
Calculator,Calculator,GPA,
Calculator,Calculator,Calculator,
Calculator,Calculator,free,
Calculator,free,USKT,
Calculator,free,CGPA,
Calculator,free,GPA,
Calculator,free,Calculator,
Calculator,free,free,
free,USKT,USKT,
free,USKT,CGPA,
free,USKT,GPA,
free,USKT,Calculator,
free,USKT,free,
free,CGPA,USKT,
free,CGPA,CGPA,
free,CGPA,GPA,
free,CGPA,Calculator,
free,CGPA,free,
free,GPA,USKT,
free,GPA,CGPA,
free,GPA,GPA,
free,GPA,Calculator,
free,GPA,free,
free,Calculator,USKT,
free,Calculator,CGPA,
free,Calculator,GPA,
free,Calculator,Calculator,
free,Calculator,free,
free,free,USKT,
free,free,CGPA,
free,free,GPA,
free,free,Calculator,
free,free,free,' name='description'/>
    <meta content='http://codewritersuog.blogspot.com/p/uskt-cgpa-calculator.html' property='og:url'/>
    <meta content='USKT CGPA Calculator ' property='og:title'/>
    <meta content='University of Sialkot, Uskt, CGPA Calculator, GPA calculator,
USKT GPA calculator, USKT CGPA Calculator,USKT gpa, gpa uskt,uskt,USKT, GPA calculator uskt, uskt gpa calsulator,
USKT,USKT,USKT,
USKT,USKT,CGPA,
USKT,USKT,GPA,
USKT,USKT,Calculator,
USKT,USKT,free,
USKT,CGPA,USKT,
USKT,CGPA,CGPA,
USKT,CGPA,GPA,
USKT,CGPA,Calculator,
USKT,CGPA,free,
USKT,GPA,USKT,
USKT,GPA,CGPA,
USKT,GPA,GPA,
USKT,GPA,Calculator,
USKT,GPA,free,
USKT,Calculator,USKT,
USKT,Calculator,CGPA,
USKT,Calculator,GPA,
USKT,Calculator,Calculator,
USKT,Calculator,free,
USKT,free,USKT,
USKT,free,CGPA,
USKT,free,GPA,
USKT,free,Calculator,
USKT,free,free,
CGPA,USKT,USKT,
CGPA,USKT,CGPA,
CGPA,USKT,GPA,
CGPA,USKT,Calculator,
CGPA,USKT,free,
CGPA,CGPA,USKT,
CGPA,CGPA,CGPA,
CGPA,CGPA,GPA,
CGPA,CGPA,Calculator,
CGPA,CGPA,free,
CGPA,GPA,USKT,
CGPA,GPA,CGPA,
CGPA,GPA,GPA,
CGPA,GPA,Calculator,
CGPA,GPA,free,
CGPA,Calculator,USKT,
CGPA,Calculator,CGPA,
CGPA,Calculator,GPA,
CGPA,Calculator,Calculator,
CGPA,Calculator,free,
CGPA,free,USKT,
CGPA,free,CGPA,
CGPA,free,GPA,
CGPA,free,Calculator,
CGPA,free,free,
GPA,USKT,USKT,
GPA,USKT,CGPA,
GPA,USKT,GPA,
GPA,USKT,Calculator,
GPA,USKT,free,
GPA,CGPA,USKT,
GPA,CGPA,CGPA,
GPA,CGPA,GPA,
GPA,CGPA,Calculator,
GPA,CGPA,free,
GPA,GPA,USKT,
GPA,GPA,CGPA,
GPA,GPA,GPA,
GPA,GPA,Calculator,
GPA,GPA,free,
GPA,Calculator,USKT,
GPA,Calculator,CGPA,
GPA,Calculator,GPA,
GPA,Calculator,Calculator,
GPA,Calculator,free,
GPA,free,USKT,
GPA,free,CGPA,
GPA,free,GPA,
GPA,free,Calculator,
GPA,free,free,
Calculator,USKT,USKT,
Calculator,USKT,CGPA,
Calculator,USKT,GPA,
Calculator,USKT,Calculator,
Calculator,USKT,free,
Calculator,CGPA,USKT,
Calculator,CGPA,CGPA,
Calculator,CGPA,GPA,
Calculator,CGPA,Calculator,
Calculator,CGPA,free,
Calculator,GPA,USKT,
Calculator,GPA,CGPA,
Calculator,GPA,GPA,
Calculator,GPA,Calculator,
Calculator,GPA,free,
Calculator,Calculator,USKT,
Calculator,Calculator,CGPA,
Calculator,Calculator,GPA,
Calculator,Calculator,Calculator,
Calculator,Calculator,free,
Calculator,free,USKT,
Calculator,free,CGPA,
Calculator,free,GPA,
Calculator,free,Calculator,
Calculator,free,free,
free,USKT,USKT,
free,USKT,CGPA,
free,USKT,GPA,
free,USKT,Calculator,
free,USKT,free,
free,CGPA,USKT,
free,CGPA,CGPA,
free,CGPA,GPA,
free,CGPA,Calculator,
free,CGPA,free,
free,GPA,USKT,
free,GPA,CGPA,
free,GPA,GPA,
free,GPA,Calculator,
free,GPA,free,
free,Calculator,USKT,
free,Calculator,CGPA,
free,Calculator,GPA,
free,Calculator,Calculator,
free,Calculator,free,
free,free,USKT,
free,free,CGPA,
free,free,GPA,
free,free,Calculator,
free,free,free,' property='og:description'/>
</head>
<body>

<?php include 'Header.php'; ?>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Login Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="" autocomplete="off">
                    <label class="form-text" for="login_name">UserName</label>
                    <input class="form-control" type="text" name="login_name">
                    <label class="form-text" for="login_pass">Password</label>
                    <input class="form-control" type="password" name="login_pass">
                    <div class="my-3 text-center">
                        <button class="btn btn-success bg-gradient px-5">Login</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<main>

    <?php include 'Gpa_Table.php' ?>

    <!--Calculator-->
    <section class="container calculator py-2">
        <div class="d-flex justify-content-center flex-column">
            <div class="calc text-center w-50 user-select-none">
                <h1>Calculator</h1>
                <p class="desc-calc">Enter Your Marks & Credit Hours To Calculate GPA.There's No Need Of Entering Points Just Directly Enter Marks!!</p>
            </div>

            <?php include "Calculator.php";  ?>

        </div>
    </section>


    <a  class="btn btn-dark " id="up"><i class="fas fa-chevron-up"></i></a>
    <section class="container counter mb-3">
        <div class="text-end">
            <a href='http://besucherzaehler.co'>Besucherzähler für Webseite</a> <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=9fafe34fd3f07aa66378b6f3a67597602f6c1571'></script>
            <script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/847047/t/6"></script>
        </div>
    </section>

    <?php include 'Footer.php'; ?>

</main>

<!--JS-->
<script src="Js/main.js"></script>
<script src="Js/jquery.js"></script>
<script src="Js/bootstrap.bundle.js"></script>
<script>
    $(document).ready(function () {
        $(window).scroll(function () {
            $(window).scrollTop() > 100 ? $("#up").fadeIn() : $("#up").fadeOut()
        })
        $("#up").click(function () {
            jQuery('html,body').animate({scrollTop:0},1000);
        })
    });
</script>
</body>
</html>