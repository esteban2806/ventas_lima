<?php require_once('../kresources/config.php'); ?>
<?php include(TEMPLATE_FRONT . DS . 'header.php'); ?>

<!-- Page Content -->
<div class="container" style="background: url('/carrito/kresources/uploads/home2.jpg') no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover;  -o-background-size: cover;  background-size: cover;">

    <div class="row">
        <!--Categories here-->       
        <div class="col-md-12">
            <div class="row carousel-holder">

                <div class="col-md-12">
                    <!--Carouse-->
                    <?php include(TEMPLATE_FRONT . DS . 'slider.php'); ?>
                </div>
                <?php include(TEMPLATE_FRONT . DS . 'side_nav.php'); ?>
                <!--Product Functon-->
                <?php include(TEMPLATE_FRONT . DS . 'products.php'); ?>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <?php include(TEMPLATE_FRONT . DS . 'footer.php'); ?>