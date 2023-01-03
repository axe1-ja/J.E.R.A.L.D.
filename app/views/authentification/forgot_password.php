<html>
<!-- Header of page -->
<img src="/public/resources/storage/Images/fond.jpg" class="w-100 background-image" alt="">
<?php
include realpath(dirname(__DIR__,1) .'/layouts/header.php');
?>

<?php
include realpath(dirname(__DIR__,1) .'/general_components/navbar.php');
?>
<div class="container text-center py-4">
	<div class="row">
		<div class="col-12"> 
			<a href="/public/home">
				<img src="/public/resources/storage/Images/logo-app2.png" class="logo-navbar center" alt="">
			</a>
		</div>
	</div>
	<div class="container center" style="width: 40rem;">
		<div class="card">
			<div class="row">
				<form name="login" action="email_send" method="post">
					<div class="col-11 text-center">
						<h3 class="f-2 p-0 m-0 pt-2">Mot de Passe oublié</h3>
						<br>
					</div>
					<div class="col-1 text-right">
						<button type="button" class="btn-close text-grey f-3" aria-label="Close" onclick="javascript:history.back()"><i class="bi bi-x-lg"></i></button>
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
</div>



<!-- Footer of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/footer.php');
?>