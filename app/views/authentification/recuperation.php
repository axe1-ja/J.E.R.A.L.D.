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
			<div class="row">
				<div class="col-11">
					<h2 class="text-center">Réinitialisation du mot de passe</h2>
				</div>
				<div class="col-1 text-right">
					<button type="button" class="btn-close text-grey f-3" aria-label="Close" onclick="javascript:history.back()"><i class="bi bi-x-lg"></i></button>
				</div>	
			</div>

			<br>

			<?php if(isset($msg)):?>
				<div class="bg-green p-1 border-round-1 center"><?php echo $msg?></div>
			<?php endif;?>
			<?php if(isset($error)):?>
				<div class="bg-red p-1 border-round-1 center"><?php echo $error?></div>
			<?php endif;?>

			<br>

			<form action="/login/reset" method="post">
				<div class="row py-2">
					<div class="col-12 text-grey text-left">
						<div class="p-1">
							<label class="form-label">Code de réinitialisation<span class="required error"></span></label>
							<input type="text" name="resetCode" placeholder="Entrer ici le code reçu par mail" required>
						</div>
						<div class="p-1">
							<label class="form-label">Votre Email<span class="required error" id="email-info"></span></label>
							<input type="text" name="email" placeholder="Entrer ici le code reçu par mail" required>
						</div>
						<div class="p-1">
							<label class="form-label">Nouveau mot de passe<span class="required error"></span></label>
							<input type="password" name="newPassword" placeholder="Nouveau mot de passe..." required>
						</div>
						<div class="p-1">
							<label class="form-label">Confirmation du mot de passe<span class="required error" ></span></label>
							<input type="password" name="confNewPassword" placeholder="Confirmation du mot de passe..." required>
						</div>

						<div class="text-right pt-2 pl-2">
							<button class="btn btn-outline-primary" type="submit" id="forgot-btn">Soumettre</button>
						</div>
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