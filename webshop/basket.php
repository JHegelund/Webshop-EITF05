<?php

session_start();

include ('header.php');
include ('navbar.php');

$productList = $_SESSION['basket'];

$html = "<ul class=\"list-group form-signin\">";

foreach ($productList as $item) {
	$html .= "<li class=\"list-group-item\">";
	$html .= $item;
	$html .= " 1x</li>";
}

$html .= "</ul>";

?>
<link href='css/login.css' type='text/css' rel='stylesheet'/>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="container" id="list">

                	<?php echo $html; ?>

                	 <div class="container">
                	 	<div class="btn-group">
                        <button name="item1" id="Lundastout" class="btn btn-primary btn-success btn-product"> <span class="glyphicon glyphicon glyphicon-usd"></span> Checka ut</button>
                        <button name="emptybasket" id="emptybasket" class="btn btn-primary btn-warning btn-product"> <span class="glyphicon glyphicon-shopping-cart"></span> Töm Varukorg</button>
                        </div>
                    </div>
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

</body>

</html>

