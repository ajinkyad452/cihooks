<?php
/*
 * Developed By Ajinkya Dube
 */

include 'common/header.php';
?>

<div class="container ">
<!-- <h2>Login to <?php echo PROJ_NAME; ?></h2> -->
    <form class="form-signin" method="post" action="<?php echo base_url(); ?>users/action/login">

        <h2 class="form-signin-heading">sign in now</h2>
        <?php echo $this->session->flashdata('errmsg'); ?>
        <div class="login-wrap">
            <input type="text" class="form-control" placeholder="Email ID" name="useremail" id="useremail" autofocus>
            <?php echo form_error('useremail', '<div class="alert alert-dismissible alert-danger">', '</div>'); ?>
            <input type="password" class="form-control" name="userpassword" id="userpassword" placeholder="Password">
            <?php echo form_error('userpassword', '<div class="alert alert-dismissible alert-danger">', '</div>'); ?>

            <button class="btn btn-lg btn-login btn-block" type="submit" name="login">Sign in</button>


        </div>


    </form>

</div>
<?php
include 'common/footer.php';
?>