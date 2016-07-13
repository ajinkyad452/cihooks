<?php

/* 
 * Developed By Ajinkya Dube
 */

include 'common/header.php';
?>
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <aside class="profile-info col-lg-9">
                <section class="panel panel-primary">
                   <div class="panel-heading">Public Profile</div>
                    <div class="panel-body bio-graph-info form-horizontal">
                        <?php if(isset($users->id)){?>
                        <?php if($isfriend==1){ ?><span class="btn btn-primary">Unfollow</span>
                        <?php }else{ ?><span class="btn btn-primary" onclick="addfollow(<?php echo $users->id; ?>)">Follow</span>
                        <?php } ?><span class="errmsg"></span>
                        <div class="form-group">
                            <label  class="col-lg-2 control-label">First Name</label>
                            <div class="col-lg-6">
                                <?php echo $users->fname; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-lg-2 control-label">Last Name</label>
                            <div class="col-lg-6"><?php echo $users->lname; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-lg-2 control-label">Address</label>
                            <div class="col-lg-6"><?php echo $users->address; ?>
                            </div>
                        </div>
                        <?php if($users->dob != ''){?>
                        <div class="form-group">
                            <label  class="col-lg-2 control-label">Birthday</label>
                            <div class="col-lg-6"><?php echo date('d-m-Y',$users->dob); ?>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="form-group">
                            <label  class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-6"><?php echo $users->emailid; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-lg-2 control-label">Mobile</label>
                            <div class="col-lg-6"><?php echo $users->mobile_no; ?>
                            </div>
                        </div>
                        <?php }else {
                            echo 'Something is wrong';
                        } ?>
                    </div>
                </section>
               
            </aside>
        </div>

        <!-- page end-->
    </section>
</section>

<script type="text/javascript">
function addfollow(fid) {
	$.ajax({
		  	type: "POST",
		  	url: "<?php echo site_url();?>"+"profile/addfollow",
			data: {fid:fid},
  			success: function(msg) {
						$('.errmsg').html(msg);
		  			}
			});
}
</script>
<?php
include 'common/footer.php';
?>