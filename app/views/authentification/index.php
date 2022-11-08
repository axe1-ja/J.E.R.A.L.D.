<!-- Header of page -->
<?php

if (! empty($_POST["btnLogin"])) {
    require_once __DIR__ . '/core/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();
}
?>

<!--
session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if(!$DB = new PDO("mysql: host=localhost; dbname=ranks_db", "root",""))
        {
            die("Could not connect to database");
        }

        $arr["email"] = $_POST["email"];
        $arr["password"] = hash('sha1', $_POST["password"]);
    
        $query = "select * from users where email = :email && password = :password limit 1";
        $stm = $DB->prepare($query);
        if($stm)
        {
            $check = $stm->execute($arr);
            if($check){
                $data = $stm->fetchAll(PDO::FETCH_ASSOC);
                if(is_array($data) && count($data) > 0)
                {
                    $_SESSION["user"] = $data[0]["id"] ;
                } else{
                    $error = "Wrong username or password";
                }
            }
            
            if($error == "")
            {
                header("location: /public/user");
                die;
            }
        }
    }

!-->


<?php
include '../app/views/layouts/header.php';

    if($error != "")
    {
        echo "<span style= 'color:red'>$error</span><br><br>";
    }

?>


<!-- Content of page -->
<img src="/public/resources/storage/Images/fond-home.jpg" class="w-100 background-image" alt="">

<div class="container text-center py-4">

    <div class="row">
        <div class="col"> 
            <a href="/public/home">
                <img src="/public/resources/storage/Images/logo-app2.png" class="logo-navbar center" alt="">
            </a>
        </div>
    </div>

    <div class="card center" style="width: 40rem;">
        <div class="card-body">
            <button type="button" class="btn-close" aria-label="Close" style="position:relative; left:300px; top:-8px" onclick="javascript:history.back()"></button>
            <form action="/public/login-action" class="text-start" method="post" id="formLogin"
                onSubmit="return validate();">

                <div class="mb-4 text-center">
                    <h3>Connexion</h3>
                </div>
                <?php
                if (isset($_SESSION["errorMessage"])) {
                    ?>
                <div class="error-message"><?php  echo $_SESSION["errorMessage"]; ?></div>
                <?php
                    unset($_SESSION["errorMessage"]);
                }
                ?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Adresse e-mail</label>
                    <input type="email" class="form-control" name="email" id="email_info" aria-describedby="emailHelp" placeholder="name@example.com" required>
                </div>
                <div class="mb-3">
                    <div>
                        <label for="password" class="form-label">Mot de passe</label><span id="password_info"
                            class="error-info"></span>
                    </div>
                    <div>
                    <input type="password" class="form-control" id="password" required>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
                </div>
                <div class="row g-0">
                    <div class="col">
                        <div class="start">
                            <a class="forgot-btn" href="/public/forgot_password">Mot de passe oublié ?</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 text-end">
                            <button type="submit" name="login" value="Login" class="btnLogin">Se connecter</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row pt-3">
        <div class="col">
            <a href="/public/register" class="card-link">
                <h4 class="text-white">
                Vous n'avez pas de compte ? Créez-en un!
                </h4>
            </a>
        </div>
    </div>
</div>

<script>
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
include '../app/views/layouts/footer.php';
?>