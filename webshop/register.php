<?php

session_start();


include ('header.php');
include ('navbar.php')

?>
<link href='css/login.css' type='text/css' rel='stylesheet'/>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="container">

                    <!-- Form start -->
                    <form class="form-signin" id="register" name="register">
                        <h2 class="form-signin-heading">Registrera</h2>

                        <label for="inputEmail" class="sr-only">Epost</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="E-post" required autofocus>

                        <label for="inputPassword" class="sr-only">Lösenord</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Lösenord" required>

                        <label for="inputAddress" class="sr-only">Address</label>
                        <input type="address" id="inputAddress" class="form-control" placeholder="Address" required>

                        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block">Registrera</button>
                    </form>
                    <!-- Form end -->

                    <!-- Login link -->
                    <a href="login.php" class="form-signin">Logga in</a>

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
    <!-- AJAX register script -->
    <script src="js/register.js"></script>

</body>

</html>
