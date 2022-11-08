<!-- Header of page -->
<?php
include '../app/views/layouts/header.php';
?>

<img src="/public/resources/storage/Images/fond-home.jpg" class="w-100 background-image" alt="">

<?php


use \models\Member;
if (! empty($_POST["login"])) {
    session_start();
    $username = filter_var($_POST["email"], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
    require_once (__DIR__ . "/models/Member.php");
    
    $member = new Member();
    $isLoggedIn = $member->processLogin($email, $password);
    if (! $isLoggedIn) {
        $_SESSION["errorMessage"] = "Invalid Credentials";
    }
    header("Location: ./views/index.php");
    exit();  
}
else{
    print("Error");
}




