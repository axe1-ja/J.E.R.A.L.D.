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
        <div class="card center" id="authCard">
            <div class="row">
                <div class="col-11">
                    <div class="text-center">
                        <h2>Connexion</h2>
                    </div>
                    <p>
                    <span id="info" class="error-info">
                        <?php if(isset($errur)):?>
                            <?php echo $erreur?>
                        <?php endif;?>
                    </span>
                </p>
                </div>
                <div class="col-1 text-right">
                    <button type="button" class="btn-close text-grey f-3" aria-label="Close" onclick="javascript:history.back()"><i class="bi bi-x-lg"></i></button>
                </div>
            </div>
            <form action="/login-action" class="text-left p-1" method="post" id="formLogin"
                onSubmit="return validate();">
                <?php
                if (isset($_SESSION["errorMessage"])) {
                    ?>
                <div class="error-message"><?php  echo $_SESSION["errorMessage"]; ?></div>
                <?php
                    unset($_SESSION["errorMessage"]);
                }
                ?>
                
                <label for="exampleInputEmail1" class="form-label">Adresse e-mail</label>
                <input type="email" class="form-control" name="email" id="email_info" aria-describedby="emailHelp" placeholder="name@example.com" value="<?php if(isset($_COOKIE['user_email'])){echo $_COOKIE['user_email'];}?>" required>
                
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" name ="password" id="password" required>
                
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember_me" value="1" <?php if(isset($_COOKIE['user_email'])){echo 'checked';}?>>
                <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>

                <?php if (isset($erreur)):?>
                <div class="bg-red border-round-1 p-2 text-center my-1"><?php  echo $erreur; ?></div>
                <?php endif;?>
                <div class="row g-0 mt-2">
                    <div class="col-6">
                        <div class="start">
                            <a class="forgot-btn" href="/forgot_password" style="color:black">Mot de passe oublié ?</a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3 text-right">
                            <button type="submit" class="btn btn-outline-primary">Se connecter</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row pt-2">
        <div class="col-12">
            <a href="/register" class="card-link">
                <h4 class="text-white">
                Vous n'avez pas de compte ? Créez-en un!
                </h4>
            </a>
        </div>
    </div>
</div>


<script>
/*
    function validate() {
        var $valid = true;
        document.getElementById("password_info").innerHTML = "";
        
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        if(email == "") 
        {
            document.getElementById("email").innerHTML = "required";
        	$valid = false;
        }
        if(password == "") 
        {
        	document.getElementById("password_info").innerHTML = "required";
            $valid = false;
        }
        return $valid;
    }
    </script>

<!-- Footer of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/footer.php');
?>