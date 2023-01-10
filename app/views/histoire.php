<!-- Header of page -->
<?php
include realpath(dirname(__DIR__,1) .'/views/layouts/header.php');
?>
<!-- Content of page -->
<img src="/public/resources/storage/Images/fond.jpg" class="w-100 background-image" alt="">

<?php
include realpath(dirname(__DIR__,1) .'/views/general_components/navbar.php');
?>

<div class="w-100 text-center p-3">
    <div class="row">
        <div class="col-3 text-left">
            <a class="access"  class="text-white" style="color: white; font-size: 18px" href="/public/home"> 
            Accueil > 
            </a>
            <a class="access"  class="text-white" style="color: white; font-size: 18px" href="/public/histoire"> 
            Histoire
            </a>
        </div>
    </div>
</div>

<div class="container text-center">
    
    <div class="row px-4">
        <div class="col-7">
            <h1 class="titre1">
                Qui est J.E.R.A.L.D ?
            </h1>
            <h3 class="texte">
                Issus et diplômés de la même école, six jeunes ingénieurs spécialisés dans le domaine du numérique se sont unis en une équipe afin d'oeuvrer pour un monde meilleur, en se penchant sur la problématique de la qualité environnementale.
            </h3>
        </div>
        <div class="col-5 pt-4"> 
            <img src="/public/resources/storage/Images/logo.ico" class="logo center cadreImg" alt="">
        </div>
    </div>


    <div class="box1 image-histoire">
        <div class="card1">
            <div class="imgBx1">
                <img src="/public/resources/storage/Images/logo.ico" alt="">
            </div>
            <div class="details1">
                <h2>Axel Joseph-Antoine<br><span>Membre 1</span></h2>
            </div>
        </div>
    
        <div class="card1">
            <div class="imgBx1">
                <img src="/public/resources/storage/Images/logo.ico" alt="">
            </div>
            <div class="details1">
                <h2>Diane Dinh<br><span>Membre 2</span></h2>
            </div>
        </div>

        <div class="card1">
            <div class="imgBx1">
                <img src="/public/resources/storage/Images/logo.ico" alt="">
            </div>
            <div class="details1">
                <h2>Romain Parreira<br><span>Membre 3</span></h2>
            </div>
        </div>
 
    </div>
    <div class="box1 image-histoire">
        <div class="card1">
            <div class="imgBx1">
                <img src="/public/resources/storage/Images/logo.ico" alt="">
            </div>
            <div class="details1">
                <h2>Léonard Gendrel<br><span>Membre 4</span></h2>
            </div>
        </div>
    
        <div class="card1">
            <div class="imgBx1">
                <img src="/public/resources/storage/Images/logo.ico" alt="">
            </div>
            <div class="details1">
                <h2>Elena Charpentier<br><span>Membre 5</span></h2>
            </div>
        </div>

        <div class="card1">
            <div class="imgBx1">
                <img src="/public/resources/storage/Images/logo.ico" alt="">
            </div>
            <div class="details1">
                <h2>Hyun Joon Yoo<br><span>Membre 6</span></h2>
            </div>
        </div>
 
    </div>

    <p><br><br><br></p>

    <div class="row mt-3 px-4">
        <div class="col-4">
            <h1 class="titre1 pt-5"> 
                Naissance du projet 
            </h1>
        </div>
        <div class="col-7">
            <h3 class="texte"> 
                Dans un monde où la qualité environnementale est au centre des préoccupations, l'entreprise Infinite Measures a lançé un appel d'offre afin de créer un projet centré cette thématique. Un cahier des charges a été mis à disposition pour les intéressés. Après que l'un des membres de notre équipe soit tombé sur l'offre faite par l'entreprise, l'équipe J.E.R.A.L.D a pris la décision de participer à ce projet, en proposant une idée originale.
            </h3>
        </div>
    </div>
    

    <div class="row mt-3 px-4">
        <div class="col-4 pt-5"> 
            <img src="/public/resources/storage/Images/logo-app2.png" class="logo-notre-projet center cadreImg mt-4" alt="">
        </div>
        <div class="col-7">
            <h1 class="titre1"> 
                    Notre Projet
            </h1>
            <h3 class="texte"> 
                    L'étude du projet initié par Infinite Measures a poussé l'équipe à créer un projet centré sur une certaine branche d'individus de la société; l'équipe s'est mise d'accord pour choisir un produit qui aiderait les personnes âgées, le produit prendrait la forme d'un bracelet connecté à une application qui permettrait de suivre en direct de manière simple ce que les différents capteurs du bracelet détectent. Les capteurs ont été choisis de telles sorte à ce qu'ils puissent améliorer au mieux la qualité de vie de la personne âgée; le bracelet est composé de capteurs cardiaque, athmosphérique, sonore, gyroscopique et de températures.
            </h3>
        </div>
    </div>

</div>
<!-- Footer of page -->
<?php
include realpath(dirname(__DIR__,1) .'/views/layouts/footer.php');
?>