<?php
$this->load->view('templates/header'); ?>
<br>
<main role="main" class="text-center">
    <div id="confirmation">
        <div>
            <img src="<?php echo HTTP_IMAGES_PATH; ?>user-check-icon.png" alt="">
            <h1>Confirmación...</h1>
            <h2>Su registro se completo satisfactoriamente</h2>
            <h3>Gracias por registrarse!</h3>
        </div>
        <hr>
        <div>
            <div class="col-lg-8">
                <a href="<?php echo base_url(); ?>users/register" class="btn btn-sm btn-primary" style="float:right"><i class="fa fa-user"></i> Register</a>
                <a class="btn btn-danger btn-sm" href="http://blog.hadsonpar.com/2022/02/php-y-mysql-web-api-crud-con-codeigniter.html" target="_blank"><i class="fa fa-cloud-upload"></i> CodeIgniter - Crear Web API RESTful</a>
            </div>
        </div>
    </div>
</main>
<br>
<?php
$this->load->view('templates/footer'); ?>