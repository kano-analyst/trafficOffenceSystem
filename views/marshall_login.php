<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Page</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/signin.css" rel="stylesheet">
    <style>
    body {
    background-image: url("../images/logo2.jpg");
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;

}
h3{
    color:green;
}    
</style>

</head>

<body>

    <div class="container">

        <form class="form-signin" action="../controllers/marshall_signin_handler.php" method="post">
            <h3 style="padding-left:75px" class="form-signin-heading"> MARSHALL LOGIN</h3>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus><br/>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me">Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" name="Login" type="submit">Sign in</button>
        </form>

    </div>
    <!-- /container -->



</body>

</html>