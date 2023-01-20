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
                                    <th>Edit</th>
                                    <th>Delete</th>
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
                                            <td>
                                                <form action="/admin/datama/edit" method="post">
                                                    <input class="d-none" type="text" name="model" value="<?php echo $model;?>">
                                                    <input class="d-none" type="text" name="idCol" value="<?php echo $cols[0];?>">
                                                    <input class="d-none" type="text" name="id" value="<?php echo $el[0];?>">
                                                    <button type="submit" class="btn btn-outline-green"><i class="bi bi-pen"></i></button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="/admin/datama/delete" method="post">
                                                    <input class="d-none" type="text" name="model" value="<?php echo $model;?>">
                                                    <input class="d-none" type="text" name="idCol" value="<?php echo $cols[0];?>">
                                                    <input class="d-none" type="text" name="id" value="<?php echo $el[0];?>">
                                                    <button type="submit" onclick="return confirm('Voulez vous vraiment supprimer cet utilisateur?')" class="btn btn-outline-red"><i class="bi bi-trash"></i></button>
                                                </form>
                                            </td>
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