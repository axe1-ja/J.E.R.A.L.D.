<!-- Header of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/header.php');
?>


<!-- Content of page -->
<?php
include realpath(dirname(__DIR__,1) .'/admin/components/admin_nav.php');
?>

<p><br></p>

<div class="container">
    <div class="card center" style='max-width:80rem'>
        <div class="row">
            <div class="col-12">
                <h1>Ajouter une donnée à la table <?php echo $model?></h1>
            </div>
        </div>
        <form action="/admin/datama/store" method="post">
            <input class="d-none" type="text" name="model" value="<?php echo $model?>">
            <div class="row">
                <?php foreach($tableCols as $col):?>
                    <?php if(strpos($col,'_datetime')==false && strpos($col,'_id')==false && strpos($col,'_Id')==false):?>
                        <div class="col-4 p-1">
                            <label for="<?php echo $col;?>"><?php echo $col;?></label>
                            <input type="text" name="<?php echo $col;?>" placeholder="Entrer la valeur désirée">
                        </div>
                    <?php endif;?>
                <?php endforeach;?>
            </div>
            <div class="p-2 text-center">
                <button class="btn btn-outline-primary" type="submit"><i class="bi bi-plus-lg"></i> Ajouter la donnée</button>
            </div>
        </form>
    </div>
</div>


<p style='margin-bottom:300px;'><br><br></p>
<!-- Footer of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/footer.php');
?>