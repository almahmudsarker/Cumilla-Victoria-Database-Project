<?php
include_once("connection.php");
error_reporting(0);

echo "<br>";
if (isset($_GET['submit'])) {
    $stdName = $_GET['std_name'];
    // echo  $stdName . "<br>";
    $stdId = $_GET['std_id'];
    // echo $stdId . "<br>";
    $class = $_GET['class'];
    // echo $class . "<br>";
    $gName = $_GET['group_name'];
    // echo $gName . "<br>";
    $lName = $_GET['lab_name'];
    $cName = $_GET['Course-Name'];
    // echo $oCourse . "<br>";
    $age = $_GET['age'];

    $query = "INSERT INTO `student`(`student_id`, `student_name`, `class`, `group_name`, `course_name`, `Age`, `lab_name`)
   VALUES ('$stdId','$stdName','$class','$gName','$cName','$age','$lName')";

    if (mysqli_query($conn, $query)) {
        echo '<script type="text/javascript">';
        echo ' alert("Data inserted Successfully.")';
        echo '</script>';
    } else {
        echo '<script type="text/javascript">';
        echo ' alert("Failed to instert information.")';
        echo '</script>';
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- nav-bar-section-start -->
    <section>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img class="img-fluid" src="images/weblogo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="http://localhost/cumilla-victoria/add-student.php">Add Student</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/cumilla-victoria/student_list.php">Student_list</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/cumilla-victoria/search_info.php">Search</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                About Us
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Faculty Members</a></li>
                                <li><a class="dropdown-item" href="#">Activities</a></li>
                                <li><a class="dropdown-item" href="#"></a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </section>
    <!-- nav-bar-section-end -->
    <!-- body-section-start -->
    <section class="container" >
        <form class="row g-3 mt-5" action="" method="GET" enctype="multipart/form-data">
            <div class="col-md-6">
                <label for="id" class="form-label">Student ID</label>
                <input type="text" name="std_id" class="form-control" id="text" placeholder="Student Id">
            </div>
            <div class="col-md-6">
                <label for="name" class="form-label">Student Name</label>
                <input type="text" name="std_name" class="form-control" id="id" placeholder="Student Name">
            </div>
            <div class="col-md-6">
                <label for="class" class="form-label">Class</label>
                <input type="text" name="class" class="form-control" id="class" placeholder="Class(HSC/Honours)">
            </div>
            <div class="col-6">
                <label for="group_name" class="form-label">Group Name</label>
                <input type="text" name="group_name" class="form-control" id="group_name"
                    placeholder="SCIENCE/BUSSINESS/ARTS">
            </div>
            <div class="col-6">
                <label for="lab_name" class="form-label">Lab Name</label>
                <input type="text" name="lab_name" class="form-control" id="lab_name" placeholder="Lab Name">
            </div>
            <div class="col-md-4">
                <label for="Course-Name" class="form-label">Course Name</label>
                <select id="Course-Name" name="Course-Name" class="form-select">
                    <option selected>Course Name (optional)</option>
                    <option value="Higher Math" name="Higher Math">Highter Math</option>
                    <option value="Biology" name="Biology">Biology</option>
                    <option value="Finance & Banking" name="Finance & Banking">Finance & Banking</option>
                    <option value="Accounting" name="Accounting">Accounting</option>

                </select>
            </div>
            <div class="col-md-6">
                <label for="age" class="form-label">Age</label>
                <input type="text" name="age" class="form-control" id="age" placeholder="Ex. 15">
            </div>

            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" required>
                    <label class="form-check-label" for="gridCheck">
                        Are you sure you want to submit
                    </label>
                </div>
            </div>
            <div class="col-12">
                <input type="submit" name="submit" class="btn btn-outline-success" value="Submit"></input>
            </div>
        </form>
    </section>
    <!-- body-section-end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>