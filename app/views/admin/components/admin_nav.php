<!--<img src="/resources/storage/Images/fond.jpg" class="navbarback" alt="">-->
<nav class="navbar w-100">
    <a class="d-inline-block pt-1 ml-2" href="/home"><img id="logo" src="/resources/storage/Images/logo-app2.png" alt="" class="logo-navbar d-inline-block"></a>
    <ul id="nav-ul" class="navbar-ul">
        <!--<li class="nav-item p-2 f-4">
            <a class="<?php if($page=='dashboard'){echo 'active';}?>" aria-current="page" href="/admin">Dashboard</a>
        </li>-->
        <li class="nav-item p-2 f-4">
            <a class="<?php if($page=='datama'){echo 'active';}?>" href="/admin/datama">Géstion des données</a>
        </li>
        <li class="nav-item p-2 f-4">
            <a class="<?php if($page=='database'){echo 'active';}?>" href="/admin/database">Actions sur la base de données</a>
        </li>
        <li class="nav-item p-2 f-4">
        
            <a class="<?php if($page=='notifs'){echo 'active';}?>" href="/admin/notifs">Notifications</a>
        </li>
    </ul>
    
    <div id="nav-dropdown" class="navbar-dropdown dropdown ml-3">
        <button class="btn btn-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person"></i> Administrateur <i class="bi bi-caret-down"></i>
        </button>
        <ul class="dropdown-content">
            <li><a class="dropdown-item" href="/home">Accueil</a></li>
            <li><a class="dropdown-item" href="/user">Accès utilisateur</a></li>
            <li><a class="dropdown-item" href="/admin/inbox">Messagerie</a></li>
            <li><a class="dropdown-item" href="/logout">Déconnexion</a></li>

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