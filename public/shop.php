<?php require_once('../kresources/config.php'); ?>
<?php include(TEMPLATE_FRONT . DS . 'header.php'); ?>

<!-- Page Content -->
<div class="container" style="background: url('/kresources/uploads/home2.jpg') no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover;  -o-background-size: cover;  background-size: cover;">

    <!-- Jumbotron Header -->
    <header>
        <h1 style="color: white">
            Todos los Productos
        </h1>
    </header>
    <!-- Title -->
    <div class="row">
        <div class="col-lg-12">
            <h3 style="color:white">Productos y Servicios</h3>
        </div>
    </div>
    <!-- /.row -->

    <!-- Page Features -->
    <div class="row text-center">


        <?php get_products_in_shop_page() ?>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->

<!-- Footer -->

<?php include(TEMPLATE_FRONT . DS . 'footer.php'); ?>