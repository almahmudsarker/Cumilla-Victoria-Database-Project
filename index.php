<?php
error_reporting(0);
include_once("connection.php");

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  if ($email == 'khanzafor@gmail.com' && $password == '123') {
    ob_start();
    header("Location: http://localhost/cumilla-victoria/student_list.php"); /* Redirect browser */
    // exit();
  } else {
    echo '<script type="text/javascript">';
    echo ' alert("Email or password is incorrect.")';  //not showing an alert box.
    echo '</script>';
  }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body class="px-5 pt-5">
   
    <!-- body-section-start -->
    <section class="form">
        <div class="container my-4 mx-5 padding-left">
            <div class="row d-flex justify-content-center align-items-center padding-left no-gutters">
                <div class="col-lg-5">
                    <img src="images/2.PNG" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5 d-grid gap-2">
                    <h4>Sign-In</h4>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="email" placeholder="Email" name="email" id=""
                                    class="form-control my-3 p-3">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" placeholder="Password" name="password" id="password"
                                    class="form-control my-3 p-3">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7 mb-3">
                                <input type="submit" name="submit" value="Login"
                                    class="btn btn-outline-dark d-grid gap-2 col-6 mx-auto"></input>
                            </div>
                        </div>
                    </form>
                    <a href="#">Forgot Password</a>
                    <p>Don't have an account? <a href="">Register Here</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- body-section-end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>