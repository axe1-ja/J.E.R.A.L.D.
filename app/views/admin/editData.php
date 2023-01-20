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
        <div class="col-12 text-center f-3">
            Modifier une donnée
        </div>
    </div>

    <div class="card center w-75 p-2">
        <form action="/admin/datama/update" method="post">
            <input class="d-none" type="text" name="model" value="<?php echo $model;?>">
            <input class="d-none" type="text" name="idCol" value="<?php echo $idCol;?>">
            <input class="d-none" type="text" name="idVal" value="<?php echo $data[$idCol];?>">
            <div class="row center">
                <?php foreach($data as $key=>$d):?>
                    <?php if($key!=$idCol && $key!='User_password'):?>
                        <div class="col-4 p-1">
                            <label for="input"><?php echo $key;?></label>
                            <input type="text" name="<?php echo $key;?>" placeholder="Entrer la nouvelle valeur" value="<?php echo $d;?>">
                        </div>
                    <?php endif;?>
                <?php endforeach;?>
            </div>
            <div class="w-100 text-center pb-2">
                <button class="btn btn-outline-green" type="submit">Modifer les données</button>
            </div>
        </form>
    </div>
</div>

<p style='margin-bottom:300px;'><br><br></p>
<!-- Footer of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/footer.php');
?>