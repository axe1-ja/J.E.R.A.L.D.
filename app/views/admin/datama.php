<!-- Header of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/header.php');
?>


<!-- Content of page -->
<?php
include realpath(dirname(__DIR__,1) .'/admin/components/admin_nav.php');
?>

<div class="container">
    <div class="row center">
        <div class="break-col-2-lg p-2">
            <div class="f-4">Tables</div>
            <div class='row'>
                <?php foreach($modelList as $m): ?>
                    <div class="break-col-12-lg w-100">
                        <form action="/admin/datama" method="post">
                            <input class='d-none' type="text" name='model' value='<?php echo $m;?>' >
                            <button class="sidebar-link text-left <?php if($model==$m): ?>active<?php endif; ?>" type='submit'><?php echo $m;?></button>
                        </form>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="break-col-10-lg p-2">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-8">
                            <div class="m-0 f-4 m-0"><?php echo ucfirst($model);?></div>
                        </div>
                        <div class="col-4">
                            <form role="search">
                                <div class="row">
                                    <div class="col-12 pt-1">
                                        <input class="form-control w-100" name="searchDb" id="search" type="search" placeholder="Search" aria-label="Search">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 pt-1 w-100" id="tableContainer">
                        <table class="table">
                            <thead>
                                <tr>
                                    <?php foreach($cols as $col): ?>
                                        <th><?php echo $col;?></th>
                                    <?php endforeach; ?>
                                </tr>
                            </thead>
                                <tbody>
                                    <?php foreach($data as $el): ?>
                                        <tr>
                                            <?php foreach($el as $k=>$e): ?>
                                                <?php if($k==0): ?>
                                                    <th scope="row"><?php echo $e;?></th>
                                                <?php else: ?>
                                                    <td><?php echo $e;?></td>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<p style='margin-bottom:300px;'><br><br></p>
<!-- Footer of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/footer.php');
?>