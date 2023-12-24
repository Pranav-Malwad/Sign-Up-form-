<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="box">
            <h1 class="title">Sign Up</h1>
            <form action="home.php" method="POST">
                <div class="input">
                    <label>Name:</label>
                    <input type="text" name="name" class="input_field" id="name" placeholder="Enter Name">
                </div>
                <div class="input">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="input_field" id="email" placeholder="Enter Email">
                </div>
                <div class="input">
                    <label for="password">Password:</label>
                    <input type="password" name="pass" class="input_field" id="pass" placeholder="Enter password">
                </div>
                <div class="input">
                    <label for="cpassword">C Password:</label>
                    <input type="password" name="cpass" class="input_field" placeholder="Re-enter Password" id="cpass">
                </div>

                <button name="submit" value="register" class="btn" type="submit"> Register</button>


            </form>
        </div>
    </div>
</body>

</html>


<?php
if ($_POST['submit']) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];

    if ($name != "" && $email != "" && $pass != "" && $cpass != "") {
        $query = "insert into register_data values ('$name' , '$email','$pass','$cpass')";
        $data = mysqli_query($conn, $query);

        if ($data) {
            echo ('succesfully registered!');
        } else {
            echo ("not registered yet!");
        }
    } 
    else {
        echo ("<script>alert('Plz feel the form!')</script>");
    }
}

?>