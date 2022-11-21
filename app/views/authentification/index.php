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

include 'db.php';

?>


<!-- Content of page -->
<img src="/public/resources/storage/Images/fond-home.jpg" class="w-100 background-image" alt="">


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

    <div class="card center" style="width: 40rem;">
        <div class="card-body">
            <div class="row">
                <div class="col-11">
                    <div class="text-center">
                        <h2>Connexion</h2>
                    </div>
                </div>
                <div class="col-1 text-right">
                    <button type="button" class="btn-close text-grey f-3" aria-label="Close" onclick="javascript:history.back()"><i class="bi bi-x-lg"></i></button>
                </div>
            </div>
            <form action="/public/login-action" class="text-left" method="post" id="formLogin"
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
                <input type="email" class="form-control" name="email" id="email_info" aria-describedby="emailHelp" placeholder="name@example.com" required>
                
                <label for="password" class="form-label">Mot de passe</label><span id="password_info" class="error-info"></span>
                <input type="password" class="form-control" id="password" required>
                
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>

                <div class="row g-0 mt-2">
                    <div class="col-6">
                        <div class="start">
                            <a class="forgot-btn" href="/public/forgot_password">Mot de passe oublié ?</a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3 text-right">
                            <button type="submit" name="login" value="Login" class="btn btn-outline-primary">Se connecter</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row pt-3">
        <div class="col-12">
            <a href="/public/register" class="card-link">
                <h4 class="text-black">
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

<?php

if(isset($_POST['email'], $_POST['password']))
{
    $stmt = $db->prepare('SELECT password FROM users WHERE email = ?');
    $stmt->execute([ $_POST['email']]);
    $password = $stmt->fetchColumn();

    if(password_verify($_POST['pasword'], $hashedPassword))
    {
        echo "Connexion reussie";
    }
    else 
    {
        echo "Mot de passe Incorrect";
    }
    
}

?>

<!-- Footer of page -->
<?php
include '../app/views/layouts/footer.php';
?>