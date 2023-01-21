<!-- Header of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/header.php');
?>


<!-- Content of page -->
<img src="/resources/storage/Images/fond.jpg" class="w-100 background-image" alt="">
<?php
include realpath(dirname(__DIR__,1) .'/user/components/user_nav.php');
?>

<div class="container p-2">
    <div class="card">
        <div class="row">
            <div class="col-12 p-2 text-center ">
                <div class='f-3 bold'>Modification des contacts d'urgence:</div>
                <em>En cas de chute, nous appellerons vos proches ci-dessus.</em>
            </div>
        </div>
        
        <div class="row">
            
            <?php if(count($eC)!=0):?>
                <?php foreach($eC as $e):?>
                    <div class="break-col-4-md p-2">

                        <form action="/user/update/proche" method="post">
                            <div class="card card-emergency center">
                                <div class="card-body">
                                    <div class="row center">
                                        <div class="col-12 f-2 text-center">
                                            Modifier ce contact d'urgence : 
                                        </div>
                                        <input class="d-none" type="text" name="id" id="id" value="<?php echo $e->id?>">
                                        <div class="col-12 my-1">
                                            <label for="name">Nom</label>
                                            <input type="text" name="name" id="name" placeholder="Entrer le nom de ce contact d'urgence" value="<?php echo $e->name?>">
                                        </div>
                                        <div class="col-12 my-1">
                                            <label for="name">Numéro de téléphone</label>
                                            <input type="text" name="phone" id="phone" placeholder="Entrer le numéro de téléphone de ce contact d'urgence" value="<?php echo $e->phone?>">
                                        </div>
                                        <div class="col-12 text-right my-2">
                                            <button type="submit" class="btn btn-green"><i class="bi bi-pen"></i> Mettre à jour! </button>
                                            <button type="submit" onclick="return confirm('Êtes vous sûr de vouloir supprimer ce contact d\'urgence? ')" formaction="/user/delete/proche" formmethod="post" class="btn btn-red"><i class="bi bi-trash"></i> Supprimer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                <?php endforeach;?>
            <?php endif;?>
        </div>
        <form action="/user/add/proche" method="post">
            <div class="row w-50 center">
                <div class="col-12 f-2 text-center">
                    Ajouter un contact d'urgence : 
                </div>
                <div class="col-12 my-1">
                    <label for="name">Nom</label>
                    <input type="text" name="name" id="name" placeholder="Entrer le nom de ce contact d'urgence">
                </div>
                <div class="col-12 my-1">
                    <label for="name">Numéro de téléphone</label>
                    <input type="text" name="phone" id="phone" placeholder="Entrer le numéro de téléphone de ce contact d'urgence">
                </div>
                <div class="col-12 text-center p-2">
                    <button type="submit" class="btn btn-outline-green"> Mettre à jour! </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Footer of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/footer.php');
?>