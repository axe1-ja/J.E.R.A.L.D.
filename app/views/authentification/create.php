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
                    <h3>Inscription</h3>
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
                <div class="mb-3">
                    <label for="exampleInputConfirmPassword1" class="form-label">Confirmer le mot de passe</label>
                    <input type="password" class="form-control" id="exampleConfirmationPassword1" id="validationCostum03" required>
                    <script>
                        var password = document.getElementById("exampleInputPassword1"), confirm_password = document.getElementById("exampleConfirmationPassword1");

                        function validatePassword(){
                          if(exampleInputPassword1.value != exampleConfirmationPassword1.value) {
                        confirm_password.setCustomValidity("Passwords Don't Match");
                          } else {
                        confirm_password.setCustomValidity('');
                          }
                        }

                        password.onchange = validatePassword;
                        confirm_password.onkeyup = validatePassword;
                    </script>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 text-end">
                            <button type="submit" class="btn btn-primary">S'inscrire</button>
                        </div>
                    </div>
                </div>
                
                
            </form>
        </div>
    </div>
    <div class="row pt-3">
        <div class="col">
            <a href="/public/?url=authentification/index" class="card-link" class="lien_compte">
                <h4 class="text-white">
                    J'ai déjà un compte.
                </h4>
            </a>
        </div>
    </div>
</div>



<!-- Footer of page -->
<?php
include '../app/views/layouts/footer.php';
?>