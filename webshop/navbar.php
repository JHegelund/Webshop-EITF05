<?php

session_start();
?>
<style>
.navbar-text {
    margin-left: 15px;
}
</style>
<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img style="max-width:35px; margin-top: -7px;"
                src="/img/home.png"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="login.php">Logga in/Registrera</a>
                    </li>
                    <li>
                        <a href="products.php">Produkter</a>
                    </li>
                    <li>
                        <a href="#">Varukorg</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <?php
                            $t = isset($_SESSION['user']);

                            if ($t) {
                                $user = $_SESSION['user'];
                                echo "<p class=\"navbar-text\">Inloggad som: $user</p>";
                            } else {
                                // Do nothing
                            }
                        ?>
                    </li>
                    <li>
                        <?php
                        $t = isset($_SESSION['user']);

                        if ($t) {
                            echo "<a href=\"logoutservice.php\">Logga ut</a>";
                        } else {
                            // Do nothing
                        }
                        ?>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>