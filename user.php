<?php
// Include the 'connect.php' file, which contains the code to establish a database connection

include 'connect.php';

// Check if a form has been submitted, and assign the form field values to variables

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Validate form data

    if (empty($name) || empty($email) || empty($mobile) || empty($password)) {
        die('Error: All fields are required.');
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Error: Invalid email format.');
    }

    // Create an SQL INSERT statement to insert data into the 'crud' table, and execute the query using the $con database connection. If the query is successful, redirect the user to a success page. If the query fails, output a MySQL error message to the browser.

    $sql = "INSERT INTO `crud` (`name`,`email`,`mobile`,`password`) 
    values('$name','$email','$mobile','$password')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('Location: success.php');
        exit;
    } else {
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Enter your email" name="email" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="name">Mobile</label>
                <input type="text" class="form-control" id="mobile" placeholder="Enter your mobile number" name="mobile" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="name">Password</label>
                <input type="text" class="form-control" id="password" placeholder="Enter your password" name="password">
            </div>
            <button type="submit" class="btn btn-primary my-2" name="submit">Submit</button>

        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</body>

</html>