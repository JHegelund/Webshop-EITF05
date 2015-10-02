<?php

session_start();

include ('header.php');
include ('navbar.php');

?>

<html>

<body>

<link href='css/login.css' type='text/css' rel='stylesheet'/>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="container">

                    <!-- Form start -->
                    <form class="form-signin" id="register" name="register">
                        <h2 class="form-signin-heading">Ange betalningsinformation:</h2>

                        <br>

                        <img src="img/creditcards.gif" class="img-responsive center-block" />

                        <br>

                        <div id="inputCardType" class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Välj korttyp
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">VISA</a></li>
                                <li><a href="#">Mastercard</a></li>
                            </ul>
                        </div>
                 
                        <br>

                        <label for="inputCardNbr" class="sr-only">Kortnummer</label>
                        <input type="text" id="inputCardNbr" class="form-control" placeholder="Kortnummer" required autofocus>

                        <br>

                        <label for="inputCardName" class="sr-only">Kontokortsinnehavare</label>
                        <input type="text" id="inputCardName" class="form-control" placeholder="Kontokortsinnehavare" required>

                        <br>

                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Månad
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">01</a></li>
                                <li><a href="#">02</a></li>
                                <li><a href="#">03</a></li>
                                <li><a href="#">04</a></li>
                                <li><a href="#">05</a></li>
                                <li><a href="#">06</a></li>
                                <li><a href="#">07</a></li>
                                <li><a href="#">08</a></li>
                                <li><a href="#">09</a></li>
                                <li><a href="#">10</a></li>
                                <li><a href="#">11</a></li>
                                <li><a href="#">12</a></li>
                            </ul>
                        </div>  

                        <br>

                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">År
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">2015</a></li>
                                <li><a href="#">2016</a></li>
                                <li><a href="#">2017</a></li>
                                <li><a href="#">2018</a></li>
                                <li><a href="#">2019</a></li>
                                <li><a href="#">2020</a></li>
                            </ul>
                        </div>  

                        <br>

                        <label for="inputCvc" class="sr-only">CVC-kod</label>
                        <input type="text" id="inputCvc" class="form-control" placeholder="CVC-kod" required>

                        <br>
                        <br>

                        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block">Betala</button>
                    </form>
                    <!-- Form end -->
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
    <script src="js/payment.js"></script>
        <!-- AJAX register script -->
    <script src="js/paymentbuttons.js"></script>

</body>

</html>
