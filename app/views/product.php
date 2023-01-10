<!-- Header of page -->
<?php
include realpath(dirname(__DIR__,1) .'/views/layouts/header.php');
?>


<!-- Content of page -->

<img src="/public/resources/storage/Images/ocean2.jpg" class="w-100 background-image" alt="">

<!-- Navbar  of page -->
<?php
include realpath(dirname(__DIR__,1) .'/views/general_components/navbar.php');
?>

<div class="container   text-center p-3">
    <div class="row">
        <div class="col-3 text-left">
            <a class="access"  class="text-white" style="color: white; font-size: 18px" href="/public/home"> 
            Accueil > 
            </a>
            <a class="access"  class="text-white" style="color: white; font-size: 18px" href="/public/product"> 
            Produit
            </a>
        </div>
        <div class="col-6">
            <h1 class="titre">E K A Ï</h1>
        </div>
    </div>
    <div class ="content-container ">
        <div class="row center">
            <img src="/public/resources/storage/Images/Bracelet.png" class="center montre" alt="">
            <p class="txtprod "> Bracelet EKAÏ<br> 
            <br>
            xx,xx€<br>
            <br>
            Plus qu'un bracelet EKAÏ s'adresse à toute une génération et permet à vous, futur possesseur, d'avoir un suivi continu de votre santé ainsi qu'une étude des risques que vous pouvez rencontrer dans la vie de tout les jours.<br> 
            <br>
            Taille unique et réglable.<br>
            <br>
            <img src="/public/resources/storage/Images/drapeau.jpg" class="center drapeau" alt="">
            100% français
            <br>
            </p>
        </div>
        <HR class="ligne">
        <p class="txtprod center "> Ce bracelet propose contient des capteurs de :</p>
        <div class="row center ">
            <img src="/public/resources/storage/Images/chute.png" class="center img-produit box" alt="">
                <div id="texte">Detection de chute : 
                    <br> 
                    Le bracelet EKAÏ est muni d'un accéléromètre qui 
                    <br>
                    permet de détecter et d'alerter en cas de chute du porteur
                    <br> 
                    un membre de sa famille ou les autorités afin que l'utilisateur
                    <br>
                    soit pris en charge le plus rapidement que possible.
                </div>
            <img src="/public/resources/storage/Images/coeur.png" class="center img-produit box" alt="">
                <div id="texte">Capteur cardiaque : 
                    <br> 
                    Le bracelet EKAÏ est muni d'un électrocardiogramme 
                    <br>
                    qui permet de mesurer le rythme cardiaque de la 
                    <br>
                    personne tant que celle-ci le garde.
                    <br>
                    Un rythme cardiaque trop élevé sera suivi d'une alerte.
                </div>
            <img src="/public/resources/storage/Images/envi.png" class="center img-produit box" alt="">
                <div id="texte">Capteur GPS : 
                    <br> 
                    Le bracelet EKAÏ étant muni d'une puce GPS 
                    <br>
                    permet donc de suivre en temps réel certaines données 
                    <br>
                    comme la pollution athmosphérique ou encore
                    <br> 
                    la température à l'endroit où ce situe l'utilisateur.
                    <br>
                    Une trop forte exposition à une pollution athmosphérique
                    <br>
                    ou encore à une témpérature extérieure trop élevé
                    <br> 
                    sera suivi d'une alerte.
                </div>
        </div>
        <div class="row center">
            <img src="/public/resources/storage/Images/temp.png" class="center img-produit box" alt="">
                <div id="texte"> Capteur de température corporelle : 
                    <br> 
                    Le bracelet EKAÏ est muni d'un thermomètre qui 
                    <br>
                    permet de mesurer la température corporelle de l'utilisateur.
                    <br>
                    Si la température de l'utilisateur est trop élevé, une 
                    <br>
                    notification lui sera envoyé pour qu'il puisse faire 
                    <br>
                    le nécessaire pour sa santé.
                </div>
            <img src="/public/resources/storage/Images/db.png" class="center img-produit box " alt="">
                <div id="texte">Capteur sonore : 
                    <br> 
                    Le bracelet EKAÏ est muni d'un capteur sonore
                    <br>
                    permettant de mesurer le niveau de décibel où se trouve
                    <br>
                    l'utilisateur, en cas d'un niveau sonore trop élevé 
                    <br>
                    le porteur recevra une notification.
                </div>
        </div>
        <HR class="ligne">
        <p class="txtprod center "> Avantages et caractéristiques : </p>
        <div class="row center liste ">
                <li class="liste">Suivi santé en continu </li>
                <li class="liste">Assistance 24h/24 </li>
                <li class="liste">Bracelet léger et confortable </li>
        </div>
        <div class="row center liste1 det ">
                <li class="liste1">Site simple d'utilisation </li>
                <li class="liste1">Grande autonomie </li>
                <li class="liste1">Alerte en cas de danger </li>
        </div>
    </div>
</div>

<!-- Footer of page -->
<?php
include realpath(dirname(__DIR__,1) .'/views/layouts/footer.php');
?>