<!-- Header of page -->
<?php
include '../app/views/layouts/header.php';
?>

<img src="/public/resources/storage/Images/fond.jpg" class="w-100 background-image" alt="">

<!-- Content of page -->
<?php
include '../app/views/user/components/user_nav.php';
?>

<div class="text-center p-3">
    <div class="row">
        <div class="col-3 text-start">
            <a class="access"  class="text-white" style="color: white; font-size: 18px" href="/public/user">
                Accès clients >
            </a>
            <a class="access"  class="text-white" style="color: white; font-size: 18px" href="/public/user/"> 
                Santé
            </a>
        </div>
        <div class="col-6">
            <h1 class="titre">Tableau de Bord</h1>
        </div>
    </div>



    

    <div class="row pt-2 mb-4">
        <div class="col-8 offset-2">

            <div class="card py-3 bg-transparent border border-0">
                <div class="card-title text-white py-3">
                    <h2 class="fs-2">Détails de Santé</h2>
                </div>
                <div class="row pt-4" >
                    <div class="col">
                        <a class="fs-1 text-white" href="/public/user/cardio">
                            <!--<img src="/public/resources/storage/Images/coeur.png" class="coeur" alt="">-->
                            <i class="bi bi-heart-pulse"></i>
                        </a>
                        <h4 class="text-white">
                            Rythme cardiaque 
                        </h4>
                    </div>

                </div>
                <div class="row pt-4" >
                    <div class="col">
                        <a class="fs-1 text-white"  href="/public/user/fall">
                            <!--<img src="/public/resources/storage/Images/chute.png" class="chute" alt="">-->
                            <i class="bi bi-graph-down-arrow"></i>
                        </a>
                        <h4 class="text-white">
                            Détection Chute
                        </h4>
                    </div>

                    <div class="col">
                        <a class="fs-1 text-white" href="/public/user/sound">
                            <!--<img src="/public/resources/storage/Images/db.png" class="db" alt="">-->
                            <i class="bi bi-volume-up"></i>
                        </a>
                        <h4 class="text-white">
                            Niveau sonore
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                            <img style="transform:rotate(25deg);position:absolute;width:100px;margin-left:-125px;margin-top:-75px" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.downloadclipart.net%2Flarge%2F24814-left-black-arrow-skinny--clipart.png&f=1&nofb=1&ipt=6dfb7230902a12c5018aff32cb4512baf63184c4352300209afc4a1ba15f3c45&ipo=images" alt="">
                            <img style="transform:rotate(90deg);position:absolute;width:100px;margin-left:-22px;margin-top:-125px" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.downloadclipart.net%2Flarge%2F24814-left-black-arrow-skinny--clipart.png&f=1&nofb=1&ipt=6dfb7230902a12c5018aff32cb4512baf63184c4352300209afc4a1ba15f3c45&ipo=images" alt="">
                            <img style="transform:rotate(155deg);position:absolute;width:100px;margin-left:75px;margin-top:-75px" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.downloadclipart.net%2Flarge%2F24814-left-black-arrow-skinny--clipart.png&f=1&nofb=1&ipt=6dfb7230902a12c5018aff32cb4512baf63184c4352300209afc4a1ba15f3c45&ipo=images" alt="">

                            <img src="/public/resources/storage/Images/logo-app.png" class="logo-navbar" alt="">

                            <img style="transform:rotate(-25deg);position:absolute;width:100px;margin-left:-180px;margin-top:40px" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.downloadclipart.net%2Flarge%2F24814-left-black-arrow-skinny--clipart.png&f=1&nofb=1&ipt=6dfb7230902a12c5018aff32cb4512baf63184c4352300209afc4a1ba15f3c45&ipo=images" alt="">
                            <img style="transform:rotate(-155deg);position:absolute;width:100px;margin-left:15px;margin-top:40px" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.downloadclipart.net%2Flarge%2F24814-left-black-arrow-skinny--clipart.png&f=1&nofb=1&ipt=6dfb7230902a12c5018aff32cb4512baf63184c4352300209afc4a1ba15f3c45&ipo=images" alt="">
                    </div>
                </div>
                <div class="row pt-3 mb-4">
                    <div class="col">
                        <a class="fs-1 text-white" href="/public/user/temperature">
                            <!--<img src="/public/resources/storage/Images/temp.png" class="temp" alt="">-->
                            <i class="bi bi-thermometer-half"></i>
                        </a>
                        <h4 class="text-white"> 
                            Température corporel
                        </h4>
                    </div>
                    <div class="col">
                        <a class="fs-1 text-white" href="/public/user/environment">
                            <!--<img src="/public/resources/storage/Images/envi.png" class="envi" alt="">-->
                            <i class="bi bi-cloud-fog2"></i>
                        </a>
                        <h4 class="text-white"> 
                            Données environnantes 
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <p><br></p>


    <div class="row my-3">

        <!-- Card avec les infos de l'utilisateur connecté -->
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-2">
                            <h4 class="card-title"><i class="bi bi-person-square"></i></h4>
                        </div>
                        <div class="col text-center">
                            <h4 class="card-title">User</h4>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col text-start">
                            <p class="card-text">Nom: ...</p>
                            <p class="card-text">Addresse: 75 rue ..., ..., France</p>
                            <p class="card-text">Date de naissance: ../../....</p>
                            <p class="card-text">email: ...@gmail.com</p>
                            <p class="card-text">Téléphone: +33 .. .. .. .. ..</p>
                            <p class="card-text">Contacts d'urgence: ... et ...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card avec un resumé de la santé de la peronne connectée -->
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-2">
                            <h4 class="card-title"><i class="bi bi-clipboard2-pulse"></i></h4>
                        </div>
                        <div class="col text-center">
                            <h4 class="card-title">Santé</h4>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col text-start">
                            <p class="card-text">Cardio: <span class="text-success">Très bonne condition</span></p>
                            <p class="card-text">Chute: <span class="text-success">Très bonne condition</span></p>
                            <p class="card-text">Niveau sonore: <span class="text-success">Très bonne condition</span></p>
                            <p class="card-text">Température: <span class="text-success">Très bonne condition</span></p>
                            <p class="card-text">Pollution: <span class="text-success">Très bonne condition</span></p>
                            <p class="fs-5 card-text mt-2">Général: <span class="text-success">Très bonne condition</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Card avec un resumé de la santé de la peronne connectée -->
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-2">
                            <h4 class="card-title"><i class="bi bi-watch"></i></h4>
                        </div>
                        <div class="col text-center">
                            <h4 class="card-title">Mon produit</h4>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col text-start">
                            <p class="card-text">Numéro de série: EK3345</p>
                            <p class="card-text">Modèle: EKAI Smart 2</p>
                            <p class="card-text">Batterie: <span class="text-success">95%</span></p>
                            <p class="card-text">Acheté le: ../../....</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


</div>



<!-- Footer of page -->
<?php
include '../app/views/layouts/footer.php';
?>

