<!-- Header of page -->
<?php
include '../app/views/layouts/header.php';
?>


<!-- Content of page -->
<img src="/public/resources/storage/Images/plage.jpg" class="w-100 background-image" alt="">


<?php
include '../app/views/general_components/navbar.php';
?>


<div class="container text-center p-4">
    <div class="row">
        <div class="col mt-4">
            <h1 class="titre" style="font-size: 32px">E K A Ï</h1>
        </div>
    </div>
    <div class="row home-elements">
        <div class="col-md">
            <a href="/public/user">
                <h5 class="access" id="homelink-left" class="text-white" style="font-size: 26px">
                    <i class="bi bi-caret-left"></i>
                    Accès Clients 
                </h5>  
            </a>   
        </div>
        <div class="col-md"> 
            <img src="/public/resources/storage/Images/logo-app2.png" class="logo center" alt="">
            <h1 class="titre mt-5">
                <em>EKAÏ</em>
            </h1>  
        </div>
    </div>
    <div class="row home-elements">
        <div class="col-md">
            <h5 class="fs-5 text-white m-0" class="text-white" style="font-size: 26px">
                <span class="d-block">Powered by Infinite Measures</span> 
                Designed by J.E.R.A.L.D.
            </h5>  
            <h1 class="fs-1 access text-white mt-4">
                Le secret de la longévité, c'est de porter Ekaï !
            </h1>
        </div>
    </div>
</div>

<p><br><br><br></p>
<p><br><br><br></p>
<p><br><br><br></p>



<!-- Footer of page -->
<?php
include '../app/views/layouts/footer.php';
?>