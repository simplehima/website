<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
    <div>
        <?php
        if (isset($_POST['create'])) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $middlename = $_POST['middlename'];
            $username = $_POST['username'];
            $mobile = $_POST['mobile'];
            $city = $_POST['city'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "INSERT INTO users (firstname, lastname, middlename, city, email, mobile, password, username ) VALUES(?,?,?,?,?,?,?,?)";
            $stmtinsert = $db->prepare($sql);
            $result = $stmtinsert->execute([$firstname, $lastname, $middlename, $mobile, $city, $email, $password, $username]);
            if ($result) {
                echo 'Hima Welcome You';
            } else {
                echo 'Sign Up Failed';
            }
        }
        ?>

    </div>
    <div>
        <form action="registration.php" method="POST">
            <div class="conrainer">
                <div class="row">
                    <div class="col-sm3">
                        <h1>registration</h1>
                        <p>Fill up the form with correct values</p>
                        <hr class="mb-3">
                        <label for="firstname"><b>First Name</b></label>
                        <input class="form-control" type="text" name="firstname" required>

                        <label for="middlename"><b>Maddle Name</b></label>
                        <input class="form-control" type="text" name="maddlename" required>

                        <label for="lastname"><b>Last Name</b></label>
                        <input class="form-control" type="text" name="lastname" required>

                        <label for="username"><b>User Name</b></label>
                        <input class="form-control" type="text" name="username" required>

                        <label for="mobile"><b>Phone Number</b></label>
                        <input class="form-control" type="text" name="mobile" required>

                        <label for="city"><b>City</b></label>
                        <input class="form-control" type="text" name="city" required>

                        <label for="email"><b>Email</b></label>
                        <input class="form-control" type="email" name="email" required>

                        <label for="password"><b>Password</b></label>
                        <input class="form-control" type="password" name="password" required>
                        <hr class="mb-3">
                        <input class="btn-primary" type="submit" name="create" value="Sign Up">
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>