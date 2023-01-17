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
<!--
<div class="text-center p-3">
    <div class="row">
        <div class="col-3 text-left">
            <a class="access"  class="text-white" style="color: white; font-size: 18px" href="/home">
                Accueil >
            </a>
            <a class="access"  class="text-white" style="color: white; font-size: 18px" href="/user/profile"> 
                Profil
            </a>
        </div>
    </div>
</div>-->

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
                    <?php echo $data['user']->prenom[0]."".$data['user']->nom[0]?>
                </div>
                <br>    
                <a href="/user/edit/profile" class="card-link "> 
                    <button class="btn btn-outline-primary"><i class="bi bi-pen"></i> Modifier vos informations</button>
                </a> 
            </div>
            
            <div class="p-3 break-col-10-lg">
                <h3 class="text-black">
                    <?php echo $data['user']->prenom." ".$data['user']->nom;?> 
                </h3>
                <div class="row">
                    <div class="break-col-4-md py-2">
                        <span class="bold">Adresse e-mail :</span>
                        <span><?php echo $data['user']->email;?></span>
                    </div>
                    <div class="break-col-4-md py-2">
                        <span class="bold">Téléphone :</span>
                        <span><?php echo $data['user']->phone;?></span>
                    </div>
                    <div class="break-col-4-md py-2">
                        <span class="bold">Adresse postale :</span>
                        <span><?php echo $data['user']->adress;?></span>
                    </div>
                    <div class="break-col-4-md py-2">
                        <span class="bold">Date de naissance :</span>
                        <span><?php echo $data['user']->dob ?? 'NA';?></span>
                    </div>
                    <div class="break-col-4-md py-2">
                        <span class="bold">Taille :</span>
                        <span><?php echo $data['user']->height ?? 'NA';?> cm</span>
                    </div>
                    <div class="break-col-4-md py-2">
                        <span class="bold">Poids :</span>
                        <span><?php echo $data['user']->weight ?? 'NA';?> kg</span>
                    </div>
                    <div class="break-col-4-md py-2">
                        <span class="bold">Identifiant appareil :</span>
                        <span><?php echo $data['bracelet']->bracelet_id ?? 'NA';?></span>
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
                <em>En cas de chute, nous appellerons vos deux proches ci-dessus.</em>
            </div>
        </div>
        
        <div class="row">
            <?php foreach($data['eC'] as $e):?>
                <div class="break-col-4-md p-2">
                    <div class="card card-primary center">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">Nom</div>
                                <div class="col-6"><?php echo $e->name?></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-6">Adresse e-mail</div>
                                <div class="col-6">....</div>
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

<!--
<div class="container">
    
    <div class="row text-center">
        <div class="col-6">
            <button id="user_profile_tab_1" class="btnLookLikeLink text-white user_profile_tabs active"><h4 class="f-2">Vos informations</h4></button>
        </div>
        <div class="col-6">
            <button id="user_profile_tab_2" class="btnLookLikeLink text-white user_profile_tabs"><h4 class="f-2">Coordonnées de vos proches</h4></button>
        </div>
    </div>

    <div id="vosInfos" class="row" style="display:block">
        <div class="col-12">
             include realpath(dirname(__DIR__,1) .'/user/components/vos_infos.php');?>
        </div>
    </div>

    <div id="proches" class="row" style="display:none">
        <div class="col-12">
             include realpath(dirname(__DIR__,1) .'/user/components/coord_proches.php');?>
        </div>
    </div>
</div>-->

<!-- Footer of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/footer.php');
?>