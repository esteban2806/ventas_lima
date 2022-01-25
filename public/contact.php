
<!-- Configuration-->

<?php require_once("../kresources/config.php"); ?>


<!-- Header-->
<?php include(TEMPLATE_FRONT . "/header.php"); ?>


<!--Navigation -->


<!-- Contact Section -->

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading">Contactenos</h2>
            <h3 class="section-subheading "><?php display_message(); ?></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form name="sentMessage" id="contactForm" method="post" >
                <div class="row">
                    <?php send_message(); ?>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Su nombre" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Correo Electronico" id="email" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="Asunto" id="subject" required data-validation-required-message="Please enter your subject.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Mensaje" id="message" required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12 text-center">
                        <div id="success"></div>
                        <button type="submit" name="submit"class="btn btn-xl">Enviar Mensaje</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <row>
        <div class="col-12">
            <iframe  width=”600” height=”450” frameborder=”0” style="border:0" allowfullscreen=”" aria-hidden="false" tabindex="0"></iframe>
            
        </div>        
    </row>
</div>
<!-- /.container -->
<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>