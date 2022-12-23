<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
    <form action="login.php" method="post">
        <?php if (isset($_GET["error"])) { ?>
            <p class="error"><?php echo $_GET["error"]; ?></p>
            <?php }?>
        <div class="txt">
            <input type="text" name="uname" placeholder="Username">
        </div>

        <div class="txt">
            <input type="password" name="password" placeholder="Password">
        </div>

        <input type="submit" value="Login">

    </form>
</body>
</html>