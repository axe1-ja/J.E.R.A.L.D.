<!-- Header of page -->
<?php
include '../app/views/layouts/header.php';
?>


<!-- Content of page -->
<img src="../public/resources/storage/Images/fond-home.jpg" class="w-100 background-image" alt="">

<div class="container text-center py-4">

    <div class="row">
        <div class="col"> 
            <a href="/public/?url=home/index">
                <img src="../public/resources/storage/Images/logo-app2.png" class="logo-navbar center" alt="">
            </a>
        </div>
    </div>

    <div class="card center" style="width: 40rem;">
        <div class="card-body">
            <form class="text-start">
                <div class="mb-4 text-center">
                    <h3>Connexion</h3>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Adresse e-mail</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" id="validationCustom03" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" id="validationCustom03" required>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
                </div>
                <div class="row g-0">
                    <div class="col">
                        <div class="start">
                            <a href="#" class="card-link">Mot de passe oublié ?</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 text-end">
                            <button type="submit" class="btn btn-primary">Se connecter</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row pt-3">
        <div class="col">
            <a href="/public/?url=authentification/create" class="card-link">
                <h4 class="text-white">
                Vous n'avez pas de compte ? Créez-en un!
                </h4>
            </a>
        </div>
    </div>
</div>

<!-- Footer of page -->
<?php
include '../app/views/layouts/footer.php';
?>