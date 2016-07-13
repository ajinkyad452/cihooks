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
                   <div class="panel-heading">Add Product</div>
                    <div class="panel-body bio-graph-info form-horizontal">
                        <?php echo form_open_multipart(base_url() . 'products/add'); ?>
                        <div class="form-group">
                            <label  class="col-lg-2 control-label">Title</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="">
                                <?php echo form_error('title', '<div class="alert alert-dismissible alert-danger">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-lg-2 control-label">Description</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="description" name="description" placeholder="Description" value="">
                                <?php echo form_error('description', '<div class="alert alert-dismissible alert-danger">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-lg-2 control-label">Category</label>
                            <div class="col-lg-6">
                                <select name="category" id="category">
                                    <option value="1">Agri</option>
                                </select>
                                <?php echo form_error('category', '<div class="alert alert-dismissible alert-danger">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-lg-2 control-label">Sub Category</label>
                            <div class="col-lg-6">
                                <select name="subcategory" id="subcategory">
                                    <option value="2">Fruits</option>
                                    <option value="3">Vegitavles</option>
                                </select>
                                <?php echo form_error('subcategory', '<div class="alert alert-dismissible alert-danger">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <input type="submit" name="submit" class="btn btn-success" value="Add">
                            </div>
                        </div>
                        </form>
                    </div>
                </section>
                
            </aside>
        </div>

        <!-- page end-->
    </section>
</section>


<?php
include 'common/footer.php';
?>