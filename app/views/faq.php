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

<div class="container  p-3">
    <div class="row">
        <div class="col-3 text-left">
            <a class="access"  class="text-white" style="color: white; font-size: 18px" href="/public/home"> 
            Accueil > 
            </a>
            <a class="access"  class="text-white" style="color: white; font-size: 18px" href="/public/faq"> 
            FAQ
            </a>
        </div>
    </div>
        <div class="row center">
            <div class ="box2">
                <p class="heading">Foire Aux Questions (F.A.Q)
                <br>
                Liste des questions les plus posées par les utilisateurs.
                </p>
                <div class="faqs">
                    <details>
                        <summary>Quelles sont les fonctionnalités de mon bracelet connecté ?</summary>
                        <p class="text"><strong> Le bracelet possède plusieurs spécialités qui sont présentées dans la page produit.</strong> </p>
                    </details>
                    <details>
                        <summary>Comment recharger la batterie de mon bracelet ?</summary>
                        <p class="text"><strong>Comme pour votre smartphone ou d'autres appareils électroniques, vous pouvez charger votre bracelet à l'aide d'un câble fourni avec celui-ci.</strong></p>
                    </details>
                    <details>
                        <summary>Comment suivre mon activité à l'aide du bracelet ?</summary>
                        <p class="text"><strong>Le suivi du bracelet se fait directement depuis le site dans le tableau de bord de l'utilisateur après vous être connecté.</strong></p>
                    </details>
                    <details>
                        <summary>Que faire si les données ne s'affichent plus sur le site ?</summary>
                        <p class="text"><strong>Si ceci vous arrive, allez sur le site internet, descendez en bas de la page et allez dans la rubrique contact afin de nous envoyer un message pour que nous puissions régler le problème.</strong></p>
                    </details>
                    <details>
                        <summary>Y a-t-il une garantie pour mon bracelet connecté?</summary>
                        <p class="text"><strong>Le bracelet est garanti pendant 3 ans.</strong></p>
                    </details>
            </div>
        </div>
</div>
</div>

<!-- Footer of page -->
<?php
include realpath(dirname(__DIR__,1) .'/views/layouts/footer.php');
?>