<!-- Header of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/header.php');
?>

<!-- Content of page -->
<img src="/resources/storage/Images/fond.jpg" class="w-100 background-image" alt="">

<?php
include realpath(dirname(__DIR__,1) .'/general_components/navbar.php');
?>


<div class="container text-center py-4">
    <div class="row">
        <div class="col-12"> 
            <a href="/home">
                <img src="/resources/storage/Images/logo-app2.png" class="logo-navbar center" alt="">
            </a>
        </div>
    </div>

    <div class="container center p-2">
        <?php if(isset($error)):?>
            <div class="card bg-red mb-2">
                <?php echo $error;?>
            </div>
        <?php endif;?>
        <div class="card center" id="authCard">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h2>Inscription Administrateur</h2>
                    </div>
                </div>
            </div>
            <form class="text-left p-1" action="/admin/login" method="post">
                <div class="mb-2">
                    <label for="exampleInputKey" class="form-label">Clé Admin</label>
                    <input type="text" name="adminKey" class="form-control" id="exampleInputKey" placeholder="Clé" required>

                    <label for="exampleInputNom" class="form-label">Nom</label>
                    <input type="text" name="nom" class="form-control" id="exampleInputNom" placeholder="Doe" required>
                    
                    <label for="exampleInputPrenom" class="form-label">Prénom</label>
                    <input type="text" name="prenom" class="form-control" id="exampleInputPrenom" placeholder="Person" required>

                    <label for="exampleInputEmail1" class="form-label">Adresse e-mail</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@example.com" required>
                    
                    <!-- ajouter le déroulant des indicatifs téléphonique ? -->
                    <label for="exampleInputTelephone" class="form-label">Téléphone</label>
                    <input type="tel" name="phone" class="form-control" id="exampleInputTelephone" placeholder="0123456789" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>

                    <label for="exampleInputAdress" class="form-label">Adresse postale</label>
                    <input type="text" name="adress" class="form-control" id="exampleInputAdress" required>

                    <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" required>
                    <span id="msg"></span>
                    <label for="exampleInputConfirmPassword1" class="form-label">Confirmer le mot de passe</label>
                    <input type="password" name="password" class="form-control" id="exampleConfirmationPassword1" required>
                    <script>
                        var password = document.getElementById("exampleInputPassword1"), confirm_password = document.getElementById("exampleConfirmationPassword1");

                        function validatePassword(){
                            if(exampleInputPassword1.value != exampleConfirmationPassword1.value) {
                        confirm_password.setCustomValidity("Les mots de passe ne correspondent pas");
                            } else {
                        confirm_password.setCustomValidity('');
                            }
                            var msg;    
                            var str = document.getElementById("exampleInputPassword1").value; 
                            if (str.match( /[0-9]/g) && 
                                    str.match( /[A-Z]/g) && 
                                    str.match(/[a-z]/g) && 
                                    str.match( /[^a-zA-Z\d]/g) &&
                                    str.length >= 8) 
                                msg = "<p style='color:green'>Mot de passe fort</p>"; 
                            else 
                                msg = "<p style='color:red'>Mot de passe faible.</p>"; 
                            document.getElementById("msg").innerHTML= msg;
                            if(msg != "<p style='color:green'>Mot de passe fort</p>") {
                        password.setCustomValidity("Un mot de passe comportant au moins 8 caractères, 1 majuscule, 1 minuscule, 1 chiffre et 1 caractère spécial est demandé.");
                            } else {
                        password.setCustomValidity('');
                            }
                        }
                        password.onchange = validatePassword;
                        confirm_password.onkeyup = validatePassword;
                    </script>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                    <label class="form-check-label" for="exampleCheck1" for="invalidCheck2">Accepter les termes et conditions</label>
                </div>
                <div class="row mt-2 mb-1">
                    <div class="col-12">
                        <div class="text-right"> 
                            <button type="submit" name="login" value="login" class="btn btn-outline-primary">S'inscrire</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row pt-2">
        <div class="col-12">
            <a href="/login" class="card-link" class="lien_compte">
                <h4 class="text-white">
                    J'ai déjà un compte !
                </h4>
            </a>
        </div>
    </div>
</div>
</body>
</html>


<!-- Footer of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/footer.php');
?>