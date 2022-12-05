<?php $this->load->view('templates/header'); ?>

<main role="main">    
        <div class="container">        
            <div class="row" id="sign-up-form">
            
                <div class="col-6 text-left">
                    <img src="<?php print HTTP_IMAGES_PATH; ?>sign-up.png" alt="Hadsonpar">
                </div>

                <div class="col-6">
                    <form action="<?php echo base_url(); ?>users/actionsignup" method="post" id="loginform" name="Login_Form" method="POST">
                        <h3 class="form-signin-heading">Sign Up form with CodeIgniter</h3>
                        <?php if (validation_errors()) { ?>
                            <div class="alert alert-danger">
                                <?php echo validation_errors(); ?>
                            </div>
                        <?php } ?>
                        <div class="form-group">
                            <label for="name">Nombres y Apellidos</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nombres y Apellidos*" required />
                        </div>

                        <div class="form-group">
                            <label for="name">Usuario</label>
                            <input type="text" class="form-control" id="user-name" name="username" placeholder="Usuario*" required />
                        </div>

                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email*" required />
                        </div>

                        <div class="form-group">
                            <label for="name">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required />
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirmar Password</label>
                            <input type="password" class="form-control" id="password-confirm" name="confirm_password" placeholder="Confirm Password" required />
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">CREATE ACCOUNT</button>
                        <div>
                    </form>
                </div>
            </div>
        
    </div>
</main>
<?php $this->load->view('templates/footer'); ?>