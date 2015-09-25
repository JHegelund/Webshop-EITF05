<?php

session_start();


include ('header.php');
include ('navbar.php');


?>
<link href='css/login.css' type='text/css' rel='stylesheet'/>
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="container">

                    <form class="form-signin" id="login" name="login">
                        <h2 class="form-signin-heading">Logga in</h2>

                        <label for="inputEmail" class="sr-only">E-post</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="E-post" required autofocus>

                        <label for="inputPassword" class="sr-only">Lösenord</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Lösenord" required>

                        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block">Logga in</button>
                    </form>

                    <a href="register.php">Registrera</a>
                    <!-- Result from AJAX -->
                    <div id="message" class="form-signin"></div>

                </div>
                <!-- /container -->
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- AJAX login script -->
    <script src="js/login.js"></script>

</body>

</html>