<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li>
                <a href="/public"><img id="logo" src="../public/resources/storage/Images/logo-app2.png" alt="" class="logo-navbar"></a>
                    
            </li>
            <li class="nav-item px-4 fs-4 mt-3">
                <a class="nav-link <?php if($data['page']=='dashboard'){echo 'active';}?>" aria-current="page" href="/public/?url=admin/index">Dashboard</a>
            </li>
            <li class="nav-item px-4 fs-4 mt-3">
                <a class="nav-link <?php if($data['page']=='datama'){echo 'active';}?>" href="/public/?url=admin/datama">Data Management</a>
            </li>
            <li class="nav-item px-4 fs-4 mt-3">
            
                <a class="nav-link <?php if($data['page']=='notifs'){echo 'active';}?>" href="/public/?url=admin/notifs">Notifications</a>
            </li>
        </ul>   
        <div class="d-flex">
            <a class="btn btn-outline-secondary me-3" id='adminUser' href="/public/?url=authentification/index"><i class="bi bi-person"></i> Admin User</a>
        </div>
        
        </div>
    </div>
</nav>