<?php

session_start();


include ('header.php');
include ('navbar.php')

?>
<link href='css/messagebox.css' type='text/css' rel='stylesheet'/>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="img/stout.png" class="img-responsive">
                        <div class="caption">
                            <div class="row">
                                <div class="col-md-6 col-xs-6">
                                    <h3>Lundastout</h3>
                                </div>
                                <div class="col-md-6 col-xs-6 price">
                                    <h3>
                                <label>23:00 SEK</label></h3>
                                </div>
                            </div>
                            <p>Mörk och djup ton med smak av rostade kaffebönor och honung.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <button name="item1" id="Lundastout" class="btn btn-primary btn-success btn-product"> <span class="glyphicon glyphicon-shopping-cart"></span> Köp</button>
                                </div>
                            </div>
                            <p> </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="img/ipa.jpg" class="img-responsive">
                        <div class="caption">
                            <div class="row">
                                <div class="col-md-6 col-xs-6">
                                    <h3>JoelsIPA</h3>
                                </div>
                                <div class="col-md-6 col-xs-6 price">
                                    <h3>
                                <label>19:00 SEK</label></h3>
                                </div>
                            </div>
                            <p>En härlig och frisk IPA med inslag av citrus och fläder.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <button name="item2" id="JoelsIPA" class="btn btn-primary btn-success btn-product"> <span class="glyphicon glyphicon-shopping-cart"></span> Köp</button>
                                </div>
                            </div>
                            <p> </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="img/lager.jpg" width="75%" height="75%" class="img-responsive">
                        <div class="caption">
                            <div class="row">
                                <div class="col-md-6 col-xs-6">
                                    <h3>Valborgslager</h3>
                                </div>
                                <div class="col-md-6 col-xs-6 price">
                                    <h3>
                                <label>14:00 SEK</label></h3>
                                </div>
                            </div>
                            <p>En härlig ljus lager perfekt för varma sommardagar.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <button name="item3" id="Valborgslager" class="btn btn-primary btn-success btn-product"> <span class="glyphicon glyphicon-shopping-cart"></span> Köp</button>
                                </div>
                            </div>
                            <p> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <!-- Result from AJAX -->
    <div id="message" class="form-signin"></div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- AJAX register script -->
    <script src="js/product.js"></script>

</body>

</html>
