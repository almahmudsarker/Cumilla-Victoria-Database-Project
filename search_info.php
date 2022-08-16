<?php
include('connection.php');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search Info</title>
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
    <section class="container mt-5">
        <form method="GET" action="student_info.php" >
            <div class="row mb-5">
                <label for="Name" class="col-sm-2 col-form-label" placeholder="Name">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Name" name="std_name" placeholder="Student Name">
                </div>
            </div>
            <div class="row mb-5">
                <label for="ID" class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                    <input type="ID" class="form-control" name="std_id" id="ID" placeholder="Id No">
                </div>
            </div>
            <div class="col-12">
                <input type="submit" class="btn btn-outline-success" value="Submit"></input>
            </div>
        </form>
    </section>
    <!-- body-section-end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
