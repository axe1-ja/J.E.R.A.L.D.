<!-- Header of page -->
<?php
include '../app/views/layouts/header.php';
?>


<!-- Content of page -->
<img src="../public/resources/storage/Images/waves.jpg" class="w-100 background-image" alt="">

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li>
                <a href="/public"><img id="logo" src="../public/resources/storage/Images/logo-app2.png" alt="" class="logo-navbar"></a>
                    
            </li>
            <li class="nav-item px-4 fs-3 mt-2">
                <a class="nav-link active" aria-current="page" href="#">Produit</a>
            </li>
            <li class="nav-item px-4 fs-3 mt-2">
                <a class="nav-link active" href="#">Histoire</a>
            </li>
            <li class="nav-item px-4 fs-3 mt-2  ">
            
                <a class="nav-link active" href="#">Equipe</a>
            </li>
        </ul>   
        <div class="d-flex">
            <a class="btn btn-secondary me-3"  href="/public/?url=authentification/index/"><i class="bi bi-person"></i></a>
        </div>
        
        </div>
    </div>
</nav>

<div class="text-center p-3">
    <div class="row">
        <div class="col-3 text-start">
            <h5 class="access"  class="text-white">
                Acceuil > Membres
            </h5>
        </div>
        <div class="col-6">
            <h1 class="titre">E K A Ï</h1>
        </div>
    </div>
    <div>
        <img src="../public/resources/storage/Images/montre.png" class="center montre" alt="">
    </div>
</div>

<!-- Footer of page -->
<?php
include '../app/views/layouts/footer.php';
?>