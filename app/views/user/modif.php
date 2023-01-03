<!-- Header of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/header.php');
?>


<!-- Content of page -->
<?php
include realpath(dirname(__DIR__,1) .'/user/components/user_nav.php');
?>

<div class="row">
    <div class="col-12 mx-2">
        <h5> Accès Client > Profil > Modifier vos informations</h5>
    </div>
</div>

<div class="container text-center py-4">
    
    <div class="row">
        <div class="col-12"> 
            <a href="/public/home">
                <img src="/public/resources/storage/Images/logo-app2.png" class="logo-navbar center" alt="">
            </a>
        </div>
    </div>

    <div class="card center" style="width: 40rem;">
        <div class="card-body">
            <form class="text-left">
                <div class="mb-4 text-center">
                    <h3>Modifier vos informations</h3>
                </div>
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Nom Prénom</label>
                    <input type="text" class="form-control" id="exampleInputName" id="validationCustom03" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Adresse e-mail</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" id="validationCustom03" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputTelephone" class="form-label">Téléphone</label>
                    <input type="tel" class="form-control" id="exampleInputTelephone" id="validationCustom03" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputAdress" class="form-label">Adresse postale</label>
                    <input type="text" class="form-control" id="exampleInputAdress" id="validationCustom03" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" id="validationCustom03" required>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 text-center">
                            <a href="/public/user/profile" class="card-link">
                                <button type="submit" class="btn btn-primary">Confirmer</button>
                            </a>    
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Footer of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/footer.php');
?>