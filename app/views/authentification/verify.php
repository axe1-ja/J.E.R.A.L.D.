<html>
<!-- Header of page -->
<?php
include '../app/views/layouts/header.php';
?>
<img src="/public/resources/storage/Images/fond.jpg" class="w-100 background-image" alt="">

<?php
include '../app/views/general_components/navbar.php';
?>
<div class="container text-center py-4">
	<div class="row">
		<div class="col-12"> 
			<a href="/public/home">
				<img src="/public/resources/storage/Images/logo-app2.png" class="logo-navbar center" alt="">
			</a>
		</div>
	</div>
	<div class="container text-center py-4">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card center p-3">
                    <h3>
                        Nous vous avons envoyé un e-mail de vérification, merci de regarder vos e-mail et de clicker sur le lien de vérification
                    </h3>
                    <br>
                    <a class="btn btn-outline-primary" href="login">Connexion</a>
                    <p><br></p>
                </div> 
            </div> 
		</div>
	</div>
</div>
    <p><br><br><br><br><br></p>

<!-- Footer of page -->
<?php
include '../app/views/layouts/footer.php';
?>