<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <style>
        body {
            margin: 0;
        }
        .nav {
            display: inline;
        }
        .logo {
            display: inline;
        }
    </style>
</head>
<body>

    <header>
        <h1 class="logo">xCompany</h1>

        <nav class="nav">
            <a href="/webtech/labtask4/home.php">Home</a> |
            <a href="/webtech/labtask4/login.php">Login</a> |
            <a href="#">Registration</a> |
        </nav>
    </header>

    <h3>Welcome to Forget Password</h3>

    <form method="post" action="">
        <fieldset>
            <legend>Forget Password</legend>
        
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required><br>

        <input type="submit" name="submit" value="submit">
        </fieldset>
    </form>

    <hr>
    <footer>
        <span>Copyright &#169 2017</span>
    </footer>
    <hr>
    
</body>
</html>