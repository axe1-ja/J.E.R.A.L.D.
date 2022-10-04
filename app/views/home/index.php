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
        <div class="row">
            <div class="col">
                <h1>Hello, <?=$data['name']?>!</h1>
            </div>
        </div>
        <div class="row home-elements">
            <div class="col">
                <h5 id="homelink-left" class="text-white">
                    <i class="bi bi-caret-left"></i>
                    Accès Visiteurs
                </h5>
            </div>
            <div class="col"> 
                <div class="center logo-container">
                    <img src="../public/resources/storage/Images/logo-app.png" class="logo" alt="">
                </div>
            </div>
            <div class="col">
                <h5 id="homelink-left" class="text-white">
                    <i class="bi bi-caret-right"></i>
                    Accès Membres
                </h5>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>