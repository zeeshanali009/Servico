<!DOCTYPE HTML>
<html>

<head>
    <title>Login to your account</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
    <div id="wrapper">
        <div id="main">
            <div class="inner">
                <section>
                    <h2>Login</h2>
                    <form method="post" action="authenticateLogin.php">
                        <div class="row uniform">
                            <div class="6u 12u$(xsmall)">
                                <input type="text" name="uname" id="uname" value="" placeholder="Username or Email Id" />
                            </div>

                            <div class="6u$ 12u$(xsmall)">
                                <input type="password" name="passwd" id="passwd" value="" placeholder="Password" />
                            </div>
                            <div>
                                <input type="submit" value="login">
                            </div>
                        </div>
                    </form>
                </section>
                <br><br>
                <section>
                    <ul class="actions fit">
                        <li><a href="signup.html" class="button special fit">Sign Up</a></li>
                        <li><a href="#" class="button fit">Login With Google</a></li>
                        <li><a href="#" class="button fit">Login With Facebook</a></li>
                    </ul>
                </section>  
            </div>
            
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>