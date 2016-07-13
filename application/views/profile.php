<?php
/*
 * Developed By Ajinkya Dube
 * Each line should be prefixed with  * 
 */

include 'common/header.php';
?>
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <aside class="profile-info col-lg-9">
                <section class="panel panel-primary">
                   <div class="panel-heading"> Profile Info</div>
                    <div class="panel-body bio-graph-info form-horizontal">
                        <?php echo form_open_multipart(base_url() . 'profile/update'); ?>
                        <div class="form-group">
                            <label  class="col-lg-2 control-label">First Name</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" value="<?php echo $users->fname; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-lg-2 control-label">Last Name</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" value="<?php echo $users->lname; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-lg-2 control-label">Address</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="<?php echo $users->address; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-lg-2 control-label">Birthday</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="dob" name="dob" placeholder="Date Of Birth" value="<?php echo date('d-m-Y',$users->dob); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="emailid" name="emailid" placeholder="Email Address" value="<?php echo $users->emailid; ?>" readonly="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-lg-2 control-label">Mobile</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="mobile_no" name="mobile_no" placeholder="Mobile Number" value="<?php echo $users->mobile_no; ?>">
                            </div>
                        </div>							  


                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <input type="submit" name="submit" class="btn btn-success" value="save">
                            </div>
                        </div>
                        </form>
                    </div>
                </section>
                <!--<section id="editpasswordd">
                    <div class="panel panel-primary">
                        <div class="panel-heading"> Set New Password</div>
                        <div class="panel-body form-horizontal">

                            <?php //echo form_open_multipart(base_url() . 'users/editpass'); ?>
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">Current Password</label>
                                <div class="col-lg-6">
                                    <input type="password" class="form-control" id="c-pwd" name="currpass" placeholder="Current Password">
                                    <?php //echo form_error('currpass', '<div class="alert alert-dismissible alert-danger">', '</div>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">New Password</label>
                                <div class="col-lg-6">
                                    <input type="password" class="form-control" id="n-pwd" name="newpass" placeholder="New Password">
                                    <?php //echo form_error('newpass', '<div class="alert alert-dismissible alert-danger">', '</div>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-lg-2 control-label">Re-type New Password</label>
                                <div class="col-lg-6">
                                    <input type="password" class="form-control" id="rt-pwd" name="confpass" placeholder="Retype New Password">
                                    <?php //echo form_error('confpass', '<div class="alert alert-dismissible alert-danger">', '</div>'); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <input type="submit" class="btn btn-danger" value="Save" name="changepassword">
                                    <button type="button" class="btn btn-default">Cancel</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </section>
                <section id="editavatarr">
                    <div class="panel panel-primary">
                        <div class="panel-heading"> Set Avatar</div>
                        <div class="panel-body form-horizontal">
                            <?php //echo $this->session->flashdata('propicerr'); ?>
                            <?php //echo form_open_multipart(base_url() . 'users/editavatar'); ?>

                            <div class="form-group">
                                <label  class="col-lg-2 control-label">Change Avatar</label>
                                <div class="col-lg-6">
                                    <input type="file" name="userfile" class="file-pos" id="userfile">
                                    <input type="text" value="<?php //echo $users->imagename; ?>" class="form-control" id="noimage" name="noimage">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <input type="submit" class="btn btn-danger" value="Save" name="changeavatar">
                                    <button type="button" class="btn btn-default">Cancel</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </section>-->
            </aside>
        </div>

        <!-- page end-->
    </section>
</section>


<?php
include 'common/footer.php';
?>