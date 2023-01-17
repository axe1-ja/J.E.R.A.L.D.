<nav class="navbar bg-white w-100" style="z-index:2000">
    <a class="d-inline-block pt-1 ml-2" href="/home"><img id="logo" src="/resources/storage/Images/logo-app2.png" alt="" class="logo-navbar d-inline-block"></a>
    <ul class="d-inline-block navbar-ul m-2">
        <li class="nav-item p-2 f-4">
            <a class="active" aria-current="page" href="/product">Produit</a>
        </li>
        <li class="nav-item p-2 f-4">
            <a class="active" href="/histoire">Histoire</a>
        </li>
        <li class="nav-item p-2 f-3">
            <a class="active" href="/contact">Contact</a>
        </li>
        <li class="nav-item p-2 f-3">
            <a class="active" href="/faq">F.A.Q</a>
        </li>
    </ul>   
    
    <div class="navbar-dropdown dropdown ml-3">
        <button class="btn btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            
            <?php if($_SESSION['loggedin']==1) : ?>
                <i class="bi bi-person"></i> <?php echo $_SESSION['user']->prenom." ".$_SESSION['user']->nom;?> <i class="bi bi-caret-down"></i>
            <?php else : ?>
                <i class="bi bi-person"></i> My Account <i class="bi bi-caret-down"></i>
            <?php endif; ?>
        </button>
        <ul class="dropdown-content">
            <?php if($_SESSION['loggedin']==0) : ?>
                <li><a class="dropdown-item" href="/login">Login</a></li>
                <li><a class="dropdown-item" href="/register">Register</a></li>
            
            <?php endif; ?>

            <?php if($_SESSION['loggedin']==1) : ?>

                <?php if($_SESSION['user']->role =='client' || $_SESSION['user']->role =='admin') : ?>
                    <li><a class="dropdown-item" href="/user">User Access</a></li>
                <?php endif; ?>

                <?php if($_SESSION['user']->role =='admin') : ?>
                    <li><a class="dropdown-item" href="/admin">Admin Access</a></li>
                <?php endif; ?>

                <li><a class="dropdown-item" href="/logout">Logout</a></li>

            <?php endif; ?>

        </ul>
    </div>
</nav>