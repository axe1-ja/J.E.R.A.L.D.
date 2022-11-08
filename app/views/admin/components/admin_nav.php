<nav class="navbar navbar-expand-lg fixed-top bg-light">
    <div class="container-fluid">
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li>
                    <a href="/public/home"><img id="logo" src="/public/resources/storage/Images/logo-app2.png" alt="" class="logo-navbar"></a>
                        
                </li>
                <li class="nav-item px-4 fs-4 mt-3">
                    <a class="nav-link <?php if($data['page']=='dashboard'){echo 'active';}?>" aria-current="page" href="/public/admin">Dashboard</a>
                </li>
                <li class="nav-item px-4 fs-4 mt-3">
                    <a class="nav-link <?php if($data['page']=='datama'){echo 'active';}?>" href="/public/admin/datama">Data Management</a>
                </li>
                <li class="nav-item px-4 fs-4 mt-3">
                
                    <a class="nav-link <?php if($data['page']=='notifs'){echo 'active';}?>" href="/public/admin/notifs">Notifications</a>
                </li>
            </ul>   
            <div class="d-flex dropdown me-3">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person"></i> Admin User
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/public/admin/inbox">Inbox</a></li>
                    <li><a class="dropdown-item" href="/public/signout">Sign out</a></li>
                </ul>
            </div>
        
        </div>
    </div>
</nav>
<p><br><br></p>