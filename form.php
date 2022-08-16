<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <table>
        <tr>
            <td>
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="text" name="name" placeholder="Name">
                    <input type="text" name="email" placeholder="Email">
                    <input type="text" name="password" placeholder="Password">
                    <input type="submit" name="submit" value="Submit">
                </form>
            </td>
            <td>
                <?php
                    if(isset($_POST['submit'])){
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        echo "Name: ".$name."<br>";
                        echo "Email: ".$email."<br>";
                        echo "Password: ".$password."<br>";
                    }
                ?>
            </td>
        </tr>

    </table>
    
</body>
</html>