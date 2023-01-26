<!-- Header of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/header.php');
?>


<!-- Content of page -->
<img src="/resources/storage/Images/fond.jpg" class="w-100 background-image" alt="">


<!-- Content of page -->
<?php
include realpath(dirname(__DIR__,1) .'/user/components/user_nav.php');
?>

<div class="container p-2">
    <div class="card center">
        <div class="row">
            <div class="col-12 p-2 text-center">
                <div class="f-3 bold">Vos informations</div>
            </div>
        </div>
        <div class="row">
            <div class="p-3 break-col-2-lg text-center">
                <div class="bg-primary center text-white profile-circle">
                    <?php echo $user->prenom[0]."".$user->nom[0]?>
                </div>
                <br>    
                <a href="/user/edit/profile" class="card-link "> 
                    <button class="btn btn-outline-primary"><i class="bi bi-pen"></i> Modifier vos informations</button>
                </a> 
            </div>
            
            <div class="p-3 break-col-10-lg">
                <h3 class="text-black">
                    <?php echo $user->prenom." ".$user->nom;?> 
                </h3>
                <div class="row">
                    <div class="break-col-4-md py-2">
                        <span class="bold">Adresse e-mail :</span>
                        <span><?php echo $user->email;?></span>
                    </div>
                    <div class="break-col-4-md py-2">
                        <span class="bold">Téléphone :</span>
                        <span><?php echo $user->phone;?></span>
                    </div>
                    <div class="break-col-4-md py-2">
                        <span class="bold">Adresse postale :</span>
                        <span><?php echo $user->adress;?></span>
                    </div>
                    <div class="break-col-4-md py-2">
                        <span class="bold">Date de naissance :</span>
                        <span>
                            <?php if($user->dob!=''):?>
                                <?php echo $user->dob ?? 'NA';?>
                            <?php else:?>
                                NA
                            <?php endif;?>
                        </span>
                    </div>
                    <div class="break-col-4-md py-2">
                        <span class="bold">Taille :</span>
                        <span>
                            <?php if($user->height!=''):?>
                                <?php echo $user->height ?? 'NA';?>
                            <?php else:?>
                                NA
                            <?php endif;?>
                            cm
                        </span>
                    </div>
                    <div class="break-col-4-md py-2">
                        <span class="bold">Poids :</span>
                        <span>
                            <?php if($user->weight!=''):?>
                                <?php echo $user->weight ?? 'NA';?>
                            <?php else:?>
                                NA
                            <?php endif;?>
                            kg
                        </span>
                    </div>
                    <div class="break-col-4-md py-2">
                        <span class="bold">Identifiant appareil :</span>
                        <span><?php echo $user->bracelet_id ?? 'NA';?></span>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>

    <br>

    <div class="card">
        <div class="row">
            <div class="col-12 p-2 text-center ">
                <div class='f-3 bold'>Contacts d'urgence:</div>
                <em>En cas de chute, nous appellerons vos proches ci-dessus.</em>
            </div>
        </div>
        
        <div class="row">
            
            <?php if(count($eC)!=0):?>
                <?php foreach($eC as $e):?>
                    <div class="break-col-4-md p-2">
                        <div class="card card-emergency center">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">Nom</div>
                                    <div class="col-6"><?php echo $e->name?></div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-6">Télephone</div>
                                    <div class="col-6"><?php echo $e->phone?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            <?php else:?>
                <div class="col-12 f-2 text-center">
                    Vous n'avez pas de contacts d'urgence enregistrés <a href="/user/edit/proches"><u class="text-primary ">en ajouter maintenant!</u></a>
                </div>
            <?php endif;?>
        </div>
        <div class="row">
            <div class="col-12 text-center p-2">
                <a href="/user/edit/proches" class="card-link">     
                    <button class="btn btn-outline-primary"><i class="bi bi-pencil"></i> Modifier les coordonnnées de vos proches</button>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Footer of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/footer.php');
?>