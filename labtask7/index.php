<?php
session_start([
    'cookie_lifetime' => 300,
]);

include_once 'inc/validation.php';

// Login Validation Checking
$invalid = "";
if (isset($_POST["submit"])) {
    if(!empty($_POST['email'])&& !empty($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        if ($email == "admin@mail.com" && $password == "password") {
            $_SESSION['login'] = $email;

            header("Location: admin.php");
        } else {
            $invalid = "Invalid username or password!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="home">
<div class="container" id="main">

    <!--  Logo  -->
    <h1 class="maintitle">
        <i class="fas fa-store"></i> <br/>G8 E-commerce
    </h1>

    <!--  form  -->
    <div class="row navigation">
        <div class="column column-60 column-offset-20">
            <div class="formaction">
                <!-- path (index.php, registration.php) -->
                <a href="index.php" id="login">Login</a> | <a href="registration.php" id="register">Register Account</a>
            </div>
            <div class="formc">
                <form action="" id="form01" method="post">
                    <h3>Login</h3>
                    <fieldset>
                        <p style="color: red;"><?php echo $invalid; ?></p>
                        <label for="email">Email</label>
                        <input type="email" placeholder="Email Address" id="email" name="email" value="<?php echo $email; ?>">
                        <span style="color: red;"><?php echo $emailErr; ?></span>
                        <label for="password">Password</label>
                        <input type="password" placeholder="Password" id="password" name="password">
                        <span style="color: red;"><?php echo $passwordErr; ?></span> <br>
                        <input class="button-primary" type="submit" name="submit" value="Submit">
                        <input type="hidden" name="action" id="action" value="login">
                    </fieldset>
                </form>
            </div>
        </div>

    </div>
</div>
</body>
</html>