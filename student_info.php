<?php
$std_id = $_GET['std_id'];
$std_name = $_GET['std_name'];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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
    <!-- formoutputsection-start-->
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Student ID</th>
                <th scope="col">Student Name</th>
                <th scope="col">Class</th>
                <th scope="col">Group Name</th>
                <th scope="col">Course Name</th>
                <th scope="col">Age</th>
                <th scope="col">Lab Name</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("connection.php");
            error_reporting(0);

            $query = "SELECT * FROM `student` where `student_name`= '$std_name' and `student_id` = '$std_id'";
            $data = mysqli_query($conn, $query);
            

            $total = mysqli_num_rows($data);

            if ($total > 0) {
                while ($result = mysqli_fetch_assoc($data)) {

                    echo " <tr>
                            <td>" . $result['student_id'] . "</td>
                            <td>" . $result['student_name'] . "</td>
                            <td>" . $result['class'] . "</td>
                            <td>" . $result['group_name'] . "</td>
                            <td>" . $result['course_name'] . "</td>
                            <td>" . $result['Age'] . "</td>
                            <td>" . $result['lab_name'] . "</td>
                        </tr>";
                }
            } else {
                echo "No data found";
            }
            ?>
        </tbody>
    </table>
    <!-- formoutputsection-end -->

    <!-- footer section start -->
    <!-- <footer>
        <div class="card text-center">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            <div class="card-footer text-muted">
                2 days ago
            </div>
        </div>
    </footer> -->
    <!-- footer-section-end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>