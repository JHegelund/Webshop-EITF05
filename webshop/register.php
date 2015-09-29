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

                        <label for="inputEmail" class="sr-only">E-post</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="E-post" required autofocus>

                        <br>

                        <label for="inputPassword" class="sr-only">Lösenord</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Lösenord" required>

                        <br>

                        <label for="inputFirstname" class="sr-only">Förnamn</label>
                        <input type="text" id="inputFirstname" class="form-control" placeholder="Förnamn" required>

                        <br>

                        <label for="inputLastname" class="sr-only">Efternamn</label>
                        <input type="text" id="inputLastname" class="form-control" placeholder="Efternamn" required>

                        <br>

                        <label for="inputStreet" class="sr-only">Gatuadress</label>
                        <input type="text" id="inputStreet" class="form-control" placeholder="Gatuadress" required>

                        <br>

                        <label for="inputZipcode" class="sr-only">Postnummer</label>
                        <input type="text" id="inputZipcode" class="form-control" placeholder="Postnummer" required>

                        <br>

                        <label for="inputCity" class="sr-only">Stad</label>
                        <input type="text" id="inputCity" class="form-control" placeholder="Stad" required>

                        <br>

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
