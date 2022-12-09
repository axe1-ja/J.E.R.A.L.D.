<html>
<!-- Header of page -->
<?php
include '../app/views/layouts/header.php';
?>

<?php
include '../app/views/general_components/navbar.php';
?>

<div class="container text-center py-4">
	<div class="row">
        <div class="col-3"></div>
        <div class="col-6">
			<div class="card center text-center p-2">
				<form name="login" action="email_send" method="post">
					<h3 class="f-2 p-0 m-0 pt-2">Mot de Passe oublié</h3>
					<br>
					<div class="row text-left">
						<div class="col-8">
							<label class="form-label">Email<span class="required error" id="email-info"></span></label>
							<input class="form-control w-75" type="text" name="email" id="email">
						</div>
						<div class="col-4 pt-2 pl-2">
							<button class="btn btn-outline-primary" type="submit" id="forgot-btn">Send Verification Email</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<!-- Footer of page -->
<?php
include '../app/views/layouts/footer.php';
?>