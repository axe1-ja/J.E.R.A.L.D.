<!-- Header of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/header.php');
?>


<!-- Content of page -->
<?php
include realpath(dirname(__DIR__,1) .'/admin/components/admin_nav.php');
?>

<p><br><br></p>

<div class="container">
    <div class="card center text-center" style="max-width:50rem;">
        <h1>Voici les actions que vous pouvez effectuer sur le base de donnée</h1>
        <p><br></p>
        <?php if(isset($msg)) :?>
            <div class="bg-green f-2 p-2 border-round-1">
                <?php echo $msg;?>
            </div>
        <?php endif;?>
        <?php if(isset($error)) :?>
            <div class="bg-red f-2 p-2 border-round-1">
                <?php echo $error;?>
            </div>
        <?php endif;?>
        <br>
        <div class="row my-1">
            <div class="col-12">
                <form action="/admin/database/migrate" method="post">
                    <button class="btn btn-primary my-1" type="submit">Exéctuer les migrations</button>
                    <p class="f-2 my-1">Permet de s'assurer que la version de la base de données est bel et bien la dernière</p>
                </form>
            </div>
        </div>
        <p><br></p>
        <div class="row">
            <div class="col-12"> 
                <form action="/admin/database/import" method="post">
                    <textarea class="my-2" type="text" name='sql' placeholder="Insérer le code SQL à executer" rows='3'></textarea>
                    <button class="btn btn-primary my-1" type="submit">Importer des données</button>
                    <p class="f-2 my-1">Permet d'importer des données à partir de code SQL</p>
                </form>
            </div>
        </div>
    </div>
</div>
<p><br><br></p>

<!-- Footer of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/footer.php');
?>