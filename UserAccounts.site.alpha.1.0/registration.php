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
            $username = $_POST['username'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $password = $_POST['password'];
            $city = $_POST['city'];
            $middlename = $_POST['middlename'];

            $sql = "INSERT INTO users (username, firstname, lastname, email, mobile, password, city,  middlename  ) VALUES(?,?,?,?,?,?,?,?)";
            $stmtinsert = $db->prepare($sql);
            $result = $stmtinsert->execute([$username, $firstname, $lastname, $email,   $mobile, $password, $city,  $middlename]);
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
                        <input class="form-control" type="text" name="middlename" required>

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