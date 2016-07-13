<?php
include 'common/header.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<section class="panel panel-info">
    <div class="panel-heading">Timeline</div>
    <div class="panel-body">
        <table class="table table-bordered table-striped table-condensed cf">
            <thead class="cf">
                <tr>
                    <th>Activity</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($timelines as $timeline) {
                    ?>
                    <tr>
                        <td>You are now following <?php echo $timeline->fid; ?> </td>
                        <td><?php echo date('d-m-Y H:i',$timeline->created_on); ?></td>
                    </tr>
                    <?php
                }
                ?>

            </tbody>
        </table>
    </div>
</section>
<section class="panel panel-primary">
    <div class="panel-heading">My Products</div>
    <div class="panel-body">
        <table class="table table-bordered table-striped table-condensed cf">
            <thead class="cf">
                <tr>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($products as $product) {
                    ?>
                    <tr>
                        <td><?php echo $product->title; ?></td>
                    </tr>
                    <?php
                }
                ?>

            </tbody>
        </table>
    </div>
</section>


<section class="panel panel-info">
    <div class="panel-heading">Discover Products</div>
    <div class="panel-body">
        <table class="table table-bordered table-striped table-condensed cf">
            <thead class="cf">
                <tr>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($disproducts as $disproduct) {
                    ?>
                    <tr>
                        <td><?php echo $disproduct->title; ?></td>
                    </tr>
                    <?php
                }
                ?>

            </tbody>
        </table>
    </div>
</section>
<section class="panel panel-primary">
    <div class="panel-heading">Discover People</div>
    <div class="panel-body">
        <table class="table table-bordered table-striped table-condensed cf">
            <thead class="cf">
                <tr>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($users as $user) {
                    ?>
                    <tr>
                        <td><a href="<?php echo site_url();?>profile/pub/<?php echo $user->id;?>"><?php echo $user->fname . ' ' . $user->lname; ?></a></td>
                    </tr>
                    <?php
                }
                ?>

            </tbody>
        </table>
    </div>
</section>
<?php
include 'common/footer.php';
?>