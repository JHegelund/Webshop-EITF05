<?php

session_start();

include ('header.php');
include ('navbar.php');

$productList = $_SESSION['receipt'];

$html = "<h2>Tack för din order!</h2><ul class=\"list-group form-signin\">";

$totalprice = 0;
$price = 0;

foreach ($productList as $item) {
    $html .= "<li class=\"list-group-item\">";
    $html .= $item;
    $html .= " x 1</li>";

    if($item == "Lundastout") {
        $price = 23;
    } else if ($item == "JoelsIPA") {
        $price = 19;
    } else if ($item == "Valborgslager")  {
        $price = 14;
    }

    $totalPrice = $totalPrice + $price;
}

$html .= "</ul> <div class=\"container\"><h3>Totalt: $totalPrice:00 SEK</h3></div>";

unset($productList);
unset($_SESSION['receipt']);

?>
<link href='css/login.css' type='text/css' rel='stylesheet'/>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="container" id="list">

                    <?php echo $html; ?>
                    
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
    <!-- AJAX empty basket script -->
    <script src="js/empty.js"></script>
    <!-- AJAX checkout script -->
    <script src="js/checkout.js"></script>

</body>

</html>

