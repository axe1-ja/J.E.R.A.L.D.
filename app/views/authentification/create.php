<!-- Header of page -->
<?php

    /*$error = "";*/

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if(!$DB = new PDO("mysql: host=localhost; port=3306; dbname=jeraldb_master", "root",""));
        {
            die("Could not connect to database");
        }

        /*echo "<pre>";
        print_r($_POST);
        echo "</pre>";*/


    function EmailExists($email)
    {
        $query = 'SELECT * FROM users where User_email = ?';
        $paramType = 's';
        $paramValue = array(
            $email
        );
        $resultArray = $this->ds->select($query, $paramType, $paramValue);
        $count = 0;
        if (is_array($resultArray)) {
            $count = count($resultArray);
        }
        if ($count > 0) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }
    //save to database
    if (EmailExists($_POST["email"]) == false){
        $arr["nom"] = $_POST["nom"];
        $arr["prenom"] = $_POST["prenom"];
        $arr["email"] = $_POST["email"];
        $arr["phone"] = $_POST["phone"];
        $arr["adress"] = $_POST["adress"];
        $arr["password"] = hash('sha1', $_POST["password"]);
    } else {
        echo('Email already exists');
    }
        

    $query = "insert into users (User_nom, User_Prenom, User_email, User_phone, User_adress, User_password) values (:nom, :prenom, :email, :phone, :adress, :password)";
    $stm = $DB->prepare($query);
    if($stm)
    {
        $check = $stm->execute($arr);
        if(!$check)
        {
            $error = "Could not save to the database";
        }
        if($error == "")
        {
            header("location: /public/user");
            die;
        }
    }
    }


include '../app/views/layouts/header.php';
?>

<?php

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
            <a href="">
                <img src="/public/resources/storage/Images/logo-app2.png" class="logo-navbar center" alt="">
            </a>
        </div>
    </div>

    <div class="card center" style="width: 40rem;">
        <div class="card-body">
            <button type="button" class="btn-close" aria-label="Close" style="position:relative; left:300px; top:-8px" onclick="javascript:history.back()"></button>
            <form class="text-start" method="post">
                <div class="mb-4 text-center">
                    <h3>Inscription</h3>
                </div>
                <div class="mb-3">
                    <label for="exampleInputNom" class="form-label">Nom</label>
                    <input type="text" name="nom" class="form-control" id="exampleInputNom" placeholder="Doe" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPrenom" class="form-label">Prénom</label>
                    <input type="text" name="prenom" class="form-control" id="exampleInputPrenom" placeholder="Person" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Adresse e-mail</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@example.com" required>
                </div>
                <div class="mb-3"> <!-- ajouter le déroulant des indicatifs téléphonique ? -->
                    <label for="exampleInputTelephone" class="form-label">Téléphone</label>
                    <input type="tel" name="phone" class="form-control" id="exampleInputTelephone" placeholder="0123456789" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputAdress" class="form-label">Adresse postale</label>
                    <input type="text" name="adress" class="form-control" id="exampleInputAdress" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputConfirmPassword1" class="form-label">Confirmer le mot de passe</label>
                    <input type="password" name="password" class="form-control" id="exampleConfirmationPassword1" required>
                    <script>
                        var password = document.getElementById("exampleInputPassword1"), confirm_password = document.getElementById("exampleConfirmationPassword1");

                        function validatePassword(){
                          if(exampleInputPassword1.value != exampleConfirmationPassword1.value) {
                        confirm_password.setCustomValidity("Passwords Don't Match");
                          } else {
                        confirm_password.setCustomValidity('');
                          }
                        }

                        password.onchange = validatePassword;
                        confirm_password.onkeyup = validatePassword;
                    </script>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1" for="invalidCheck2">Accepter les termes et conditions</label>
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 text-end">
                            <button type="submit" name="login" value="login" class="btnLogin">S'inscrire</button>
                        </div>
                    </div>
                </div>
                
                
            </form>
        </div>
    </div>
    <div class="row pt-3">
        <div class="col">
            <a href="/public/login" class="card-link" class="lien_compte">
                <h4 class="text-white">
                    J'ai déjà un compte !
                </h4>
            </a>
        </div>
    </div>
</div>

<--script>
    function validate() {
        var $valid = true;
        document.getElementById("email").innerHTML = "";
        document.getElementById("password").innerHTML = "";
        
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        if(email == "") 
        {
            document.getElementById("email").innerHTML = "required";
        	$valid = false;
        }
        if(password == "") 
        {
        	document.getElementById("password").innerHTML = "required";
            $valid = false;
        }
        return $valid;
    }
    <--/script>
</body>
</html>


<!-- Footer of page -->
<?php
include '../app/views/layouts/footer.php';
?>