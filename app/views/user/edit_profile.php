<!-- Header of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/header.php');
?>


<!-- Content of page -->
<img src="/resources/storage/Images/fond.jpg" class="w-100 background-image" alt="">


<!-- Content of page -->
<?php
include realpath(dirname(__DIR__,1) .'/user/components/user_nav.php');
?>

<div class="text-center p-3">
    <div class="row">
        <div class="col-3 text-left">
            <a class="access"  class="text-white" style="color: white; font-size: 18px" href="/home">
                Accueil >
            </a>
            <a class="access"  class="text-white" style="color: white; font-size: 18px" href="/user/profile"> 
                Profil >
            </a>
            <a class="access"  class="text-white" style="color: white; font-size: 18px" href="/user/edit_profile"> 
                Modifier vos informations
            </a>
        </div>
    </div>
</div>

<div class="container text-center py-4">
    
    <div class="row">
        <div class="col-12"> 
            <a href="/home">
                <img src="/resources/storage/Images/logo-app2.png" class="logo-navbar center" alt="">
            </a>
        </div>
    </div>

    <div class="card center" style="width: 40rem;">
        <div class="card-body">  
            <div class="mb-4 text-center">
                <h3>Modifier vos informations</h3>
            </div> 
            <form action="/user/update" method="post" class="row text-left">
                <div class="col-12"> 
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="exampleInputName" id="validationCustom03" name="nom" value="<?php echo $user->nom;?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="exampleInputName" id="validationCustom03" name="prenom" value="<?php echo $user->prenom;?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Adresse e-mail</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo $user->email;?>" id="validationCustom03" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputTelephone" class="form-label">Téléphone</label>
                        <input type="tel" class="form-control" id="exampleInputTelephone" id="validationCustom03" name="phone" value="<?php echo $user->phone;?>"  required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputAdress" class="form-label">Adresse postale</label>
                        <input type="text" class="form-control" id="exampleInputAdress" id="validationCustom03" name="adress" value="<?php echo $user->adress;?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputAdress" class="form-label">Date de naissance</label>
                        <input type="date" class="form-control" id="exampleInputAdress" id="validationCustom03" name="dob" value="<?php echo $user->dob ?? '';?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputAdress" class="form-label">Taille</label>
                        <input type="text" class="form-control" id="exampleInputAdress" id="validationCustom03" name="height" placeholder="Valeur en cm" value="<?php echo $user->height ?? '';?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputAdress" class="form-label">Poids</label>
                        <input type="text" class="form-control" id="exampleInputAdress" id="validationCustom03" name="weight" placeholder="Valeur en kg" value="<?php echo $user->weight ?? '';?>" required>
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="exampleInputBracelet" class="form-label">Identifiant Bracelet</label>
                        <input type="text" class="form-control" id="exampleInputBracelet" id="validationCustom03" name="bracelet" placeholder="987654321" value="<?php echo $bracelet->bracelet_id ?? '';?>" required>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3 text-center">
                                <a href="/user/profile" class="card-link">
                                    <button type="submit" class="btn btn-primary">Confirmer</button>
                                </a>    
                            </div>
                        </div>
                    </div>
                </div>    
            </form>
        </div>
    </div>
</div>


<!-- Footer of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/footer.php');
?>