<?php
use models\Member;

if (! empty($_POST["forgot-btn"])) {
    require_once __DIR__ . '/models/Member.php';
    $member = new Member();
    $displayMessage = $member->handleForgot();
}
?>
<HTML>


<!-- Header of page -->
<?php
include '../app/views/layouts/header.php';
?>

<TITLE>Mot de Passe oublié</TITLE>

<BODY>
	<div class="container text-center py-4">
		<div class="sign-up-container">
			<div class="signup-align">
				<form name="login" action="" method="post"
					onsubmit="return loginValidation()">
					<div class="signup-heading">Mot de Passe oublié</div>
<?php
if (! empty($displayMessage["status"])) {
    if ($displayMessage["status"] == "error") {
        ?>
				    <div class="server-response error-msg"><?php echo $displayMessage["message"]; ?></div>
<?php
    } else if ($displayMessage["status"] == "success") {
        ?>
                    <div class="server-response success-msg"><?php echo $displayMessage["message"]; ?></div>
<?php
    }
}
?>
				<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Email<span class="required error" id="email-info"></span>
							</div>
							<input class="input-box-330" type="text" name="email"
								id="email">
						</div>
					</div>
					<div class="row">
						<input class="btn" type="submit" name="forgot-btn" id="forgot-btn"
							value="Forgot Password">
					</div>
				</form>
			</div>
		</div>
	</div>

	<script>
function loginValidation() {
	var valid = true;
	$("#email").removeClass("error-field");
	var Email = $("#email").val();
	$("#email-info").html("").hide();

	if (Email.trim() == "") {
		$("#email-info").html("required.").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	}
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;
}
</script>
</BODY>
</HTML>