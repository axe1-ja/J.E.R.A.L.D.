<!-- Header of page -->
<?php
include realpath(dirname(__DIR__,1) .'/views/layouts/header.php');
?>


<!-- Content of page -->

<img src="/resources/storage/Images/ocean2.jpg" class="w-100 background-image" alt="">

<!-- Navbar  of page -->
<?php
include realpath(dirname(__DIR__,1) .'/views/general_components/navbar.php');
?>

<div class="container   text-center p-3">
    <div class="row">
        <div class="col-3 text-left">
            <a class="access"  class="text-white" style="color: white; font-size: 18px" href="/home"> 
            Accueil > 
            </a>
            <a class="access"  class="text-white" style="color: white; font-size: 18px" href="/product"> 
            Produit
            </a>
        </div>
        <div class="col-6">
            <h1 class="titre">Notre Produit</h1>
        </div>
    </div>
    <div class="card">
        <div class="row">
            <div class="break-col-6-md">
                <img src="/resources/storage/Images/Bracelet.png" id='montre' class="center montre-md mt-5" alt="">
            </div>
            <div class="break-col-6-md">
                <p class="f-3 p-2"> 
                    Bracelet EKAÏ
                </p>
                <p class="f-2 p-2"> 
                    69,96€
                </p>
                <p class="f-2 p-2"> 
                    Plus qu'un bracelet EKAÏ s'adresse à toute une génération et permet à vous, futur possesseur, d'avoir un suivi continu de votre santé ainsi qu'une étude des risques que vous pouvez rencontrer dans la vie de tout les jours.
                </p>
                <p class="f-2 p-2"> 
                    Taille unique et réglable.
                </p>
                <img src="/resources/storage/Images/drapeau.jpg" class="center drapeau" alt="">
                <p class="f-2 p-2"> 
                    100% français 
                </p>
            </div>
        </div>

        <hr class="ligne">

        <div class="row">
            <div class="col-12">
                <p class="f-4 p-2 center"> Ce bracelet propose contient des capteurs de :</p>

                <br>

                <div class="row px-5">
                    <div class="capteurs col-12">
                        <img src="/resources/storage/Images/chute.png" class="center img-produit box" alt="">
                        <div class='tooltip' id="texte">
                            Detection de chute : 
                            <br> 
                            Le bracelet EKAÏ est muni d'un accéléromètre qui 
                            <br>
                            permet de détecter et d'alerter en cas de chute du porteur
                            <br> 
                            un membre de sa famille ou les autorités afin que l'utilisateur
                            <br>
                            soit pris en charge le plus rapidement que possible.
                        </div>
                    </div>
                    <div class="capteurs col-12">
                        <img src="/resources/storage/Images/coeur.png" class="center img-produit box" alt="">
                        <div class='tooltip' id="texte">Capteur cardiaque : 
                            <br> 
                            Le bracelet EKAÏ est muni d'un électrocardiogramme 
                            <br>
                            qui permet de mesurer le rythme cardiaque de la 
                            <br>
                            personne tant que celle-ci le garde.
                            <br>
                            Un rythme cardiaque trop élevé sera suivi d'une alerte.
                        </div>
                    </div>
                    <div class="capteurs col-12">
                        <img src="/resources/storage/Images/envi.png" class="center img-produit box" alt="">
                        <div class='tooltip' id="texte">Capteur GPS : 
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

                    <div class="capteurs col-12">
                        <img src="/resources/storage/Images/temp.png" class="center img-produit box" alt="">
                        <div class='tooltip' id="texte"> Capteur de température corporelle : 
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
                    </div>
                    <div class="capteurs col-12">
                        <img src="/resources/storage/Images/db.png" class="center img-produit box " alt="">
                        <div class='tooltip' id="texte">Capteur sonore : 
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
                </div>
            </div>
        </div>
        

        <hr class="ligne d-block">

        <div class='py-2 d-block'>
            <p class="f-4 p-2 center">Détails du produit : </p>

            <div class='center border-1 border-round-1' id="productDetail">
                <table>
                    <tbody>
                        <tr>
                            <th>Prix</th>
                            <td>69,96€</td>
                        </tr>
                        <tr>
                            <th>Poids</th>
                            <td>20g</td>
                        </tr>
                        <tr>
                            <th>Technologie de connectivité</th>
                            <td>Bluetooth</td>
                        </tr>
                        <tr>
                            <th>Autonomie</th>
                            <td>5 jours</td>
                        </tr>
                        <tr>
                            <th>Caractéristiques spéciales</th>
                            <td>
                                <ul class="text-left">
                                    <li>Suivi santé en continu </li>
                                    <li>Assistance 24h/24 </li>
                                    <li>Bracelet léger et confortable </li>
                                    <li>Site simple d'utilisation </li>
                                    <li>Grande autonomie </li>
                                    <li>Alerte en cas de danger </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th>Couleur</th>
                            <td>Noir ou Blanc</td>
                        </tr>
                        <tr>
                            <th>Temps de chargement</th>
                            <td>1 heure</td>
                        </tr>
                        <tr>
                            <th>Piles nécessaires</th>
                            <td>Non</td>
                        </tr>
                        <tr>
                            <th>Chargeur inclus</th>
                            <td>Oui</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>

<!-- Footer of page -->
<?php
include realpath(dirname(__DIR__,1) .'/views/layouts/footer.php');
?>