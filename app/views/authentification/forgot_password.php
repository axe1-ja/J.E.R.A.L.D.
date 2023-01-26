<html>
<!-- Header of page -->
<img src="/resources/storage/Images/fond.jpg" class="w-100 background-image" alt="">
<?php
include realpath(dirname(__DIR__,1) .'/layouts/header.php');
?>

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
	<div class="container center" style="width: 40rem;">
		<div class="card">
				<form name="login" action="/login/recuperation" method="post">
					<div class="row">
						<div class="col-11">
							<h2 class="text-center">Mot de Passe oublié</h2>
						</div>
						<div class="col-1 text-right">
							<button type="button" class="btn-close text-grey f-3" aria-label="Close" onclick="javascript:history.back()"><i class="bi bi-x-lg"></i></button>
						</div>	
					</div>
					<div class="row py-2">
						<div class="col-12 f-1-5 text-grey text-center">
							<em>Nous allons vous envoyer un e-mail contenant un lien, avec votre code de récupération de mot de passe</em>
						</div>
					</div>
					<div class="row text-left">
						<div class="col-8">
							<label class="form-label">Email<span class="required error" id="email-info"></span></label>
							<input class="form-control w-75" type="text" name="email" id="email">
						</div>
						<div class="col-4 pt-2 pl-2">
							<button class="btn btn-outline-primary" type="submit" id="forgot-btn">Soumettre</button>
						</div>
					</div>
				</form>
		</div>
	</div>
</div>
<br>
<br>
<br>
<!-- Footer of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/footer.php');
?>