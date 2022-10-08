<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="../public/resources/storage/Images/logo.ico">
    <title>J.E.R.A.L.D.</title>
    
    <link rel="stylesheet" href="./resources/css/app.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    
</head>
<body>

    <img src="../public/resources/storage/Images/fond-home.jpg" class="w-100 background-image" alt="">
    
    <div class="container text-center p-4">
        <div class="card center" style="width: 40rem;">
            <div class="card-body">
                <form class="text-start">
                    <div class="mb-4 text-center">
                        <h3>Inscription</h3>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Nom Prénom</label>
                        <input type="text" class="form-control" id="exampleInputName">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Adresse e-mail</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputTelephone" class="form-label">Téléphone</label>
                        <input type="tel" class="form-control" id="exampleInputTelephone">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputAdress" class="form-label">Adresse postale</label>
                        <input type="text" class="form-control" id="exampleInputAdress">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputConfirmPassword1" class="form-label">Confirmer le mot de passe</label>
                        <input type="password" class="form-control" id="exampleInputConfirmPassword1">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 text-end">
                                <button type="submit" class="btn btn-primary">S'inscrire</button>
                            </div>
                        </div>
                    </div>
                    
                    
                </form>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col">
                <a href="/public/?url=authentification/index/" class="card-link">J'ai déjà un compte.</a>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>