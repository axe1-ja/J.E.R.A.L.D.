<!--<img src="/public/resources/storage/Images/fond.jpg" class="navbarback" alt="">-->
<nav class="navbar w-100">
    <a class="d-inline-block pt-1 ml-2" href="/public/home"><img id="logo" src="/public/resources/storage/Images/logo-app2.png" alt="" class="logo-navbar d-inline-block"></a>
    <ul id="nav-ul" class="navbar-ul">
        <li class="nav-item p-2 f-4">
            <a class="active"  aria-current="page" href="/public/product">Produit</a>
        </li>
        <li class="nav-item p-2 f-4">
            <a class="active"  href="/public/histoire">Histoire</a>
        </li>
        <li class="nav-item p-2 f-4">
            <a class="active"  href="/public/contact">Contact</a>
        </li>
        <li class="nav-item p-2 f-4">
            <a class="active"  href="/public/faq">F.A.Q</a>
        </li>
    </ul>   
    
    <div id="nav-dropdown" class="navbar-dropdown dropdown ml-3">
        <button class="btn btn-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php if($_SESSION['loggedin']==1) : ?>
                <i class="bi bi-person"></i> <?php echo $_SESSION['user']->prenom." ".$_SESSION['user']->nom;?> <i class="bi bi-caret-down"></i>
            <?php else : ?>
                <i class="bi bi-person"></i> Mon Compte <i class="bi bi-caret-down"></i>
            <?php endif; ?>
        </button>
        <ul class="dropdown-content">
            <?php if($_SESSION['loggedin']==0) : ?>
                <li><a class="dropdown-item"  href="/public/login">Connexion</a></li>
                <li><a class="dropdown-item"  href="/public/register">Inscription</a></li>
            
            <?php endif; ?>

            <?php if($_SESSION['loggedin']==1) : ?>

                <?php if($_SESSION['user']->role =='client' || $_SESSION['user']->role =='admin') : ?>
                    <li><a class="dropdown-item" href="/public/user">Accès utilisateur</a></li>
                <?php endif; ?>

                <?php if($_SESSION['user']->role =='admin') : ?>
                    <li><a class="dropdown-item" href="/public/admin">Accès admin</a></li>
                <?php endif; ?>

                <li><a class="dropdown-item" href="/public/logout">Déconnexion</a></li>

            <?php endif; ?>

        </ul>
    </div>
    
    <div href="#" id="navIcon" onclick='showNav()' class="navIcon">
        <i class="bi bi-list mx-4"></i>
    </div>
</nav>

<script>
    function showNav() {
        var x = document.getElementById("nav-ul");
        if (x.style.display === "none" || x.style.display == "") {
            x.style.display = "block";
            x.style.position = "relative";
        } else {
            x.style.display = "none";
        }
        var y = document.getElementById("nav-dropdown");
        if (y.style.display === "none" || y.style.display == "") {
            y.style.display = "block";
            y.style.position = "relative";
            y.style.margin = "0px 0px 50px 55px";
        } else {
            y.style.display = "none";
        }
    }
    window.addEventListener("resize", function() {
        var x = document.getElementById("nav-ul");
        var y = document.getElementById("nav-dropdown");
        if (window.matchMedia("(min-width: 768px)").matches) {
            x.setAttribute("style", "");
            y.setAttribute("style", "");
        }
    })
</script>