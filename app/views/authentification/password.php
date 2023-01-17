<!-- Header of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/header.php');
include 'db.php';
?>

<!-- Content of page -->
<img src="/resources/storage/Images/ocean2.jpg" class="w-100 background-image" alt="">


<div class="container text-center py-4">
    <div class="row">
        <div class="col-12"> 
            <a href="/home">
                <img src="/resources/storage/Images/logo-app2.png" class="logo-navbar center" alt="">
            </a>
        </div>
    </div>

    <div class="card center" style="width: 40rem;">
        <div class="card-body">
            <form class="text-left">
                <div class="mb-4 text-center">
                    <h3>Mot de passe oublié </h3>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Adresse e-mail</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" id="validationCustom03" required>
                </div>
                <div class="row g-0">
                    <div class="col-12">
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary">M'envoyer un token</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<?php

if(isset($_POST['email']))
{
    $password = uniqid();
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $message = "Bonjour, voici votre nouveau mot de passe  $password";
    $headers = 'Content-Type: text/plain; charset="utf-8"'." "; 

    if(mail($_POST['email'], 'Mot de passe oublié', $message, $headers))
    {
        $sql = "UPDATE users SET password = ? WHERE email = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$hashedPassword, $_POST['email']]);
        echo "Mail envoyé";
    }
    else
    {
        echo "Une erreur est survenue...";
    }
}

?>

<!-- Footer of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/footer.php');

?>