<nav class="navbar bg-white w-100" style="z-index:2000">
    <a class="d-inline-block pt-1 ml-2" href="/public/home"><img id="logo" src="/public/resources/storage/Images/logo-app2.png" alt="" class="logo-navbar d-inline-block"></a>
    <ul class="d-inline-block navbar-ul m-2">
        <li class="px-4 f-3 mt-2">
            <a class="<?php if($data['page']=='dashboard'){echo 'active';}?>" aria-current="page" href="/public/admin">Dashboard</a>
        </li>
        <li class="px-4 f-3 mt-2">
            <a class="<?php if($data['page']=='datama'){echo 'active';}?>" href="/public/admin/datama">Data Management</a>
        </li>
        <li class="px-4 f-3 mt-2">
        
            <a class="<?php if($data['page']=='notifs'){echo 'active';}?>" href="/public/admin/notifs">Notifications</a>
        </li>
    </ul>
    <div class="navbar-dropdown dropdown ml-3">
        <button class="btn btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person"></i> Admin User <i class="bi bi-caret-down"></i>
        </button>
        <ul class="dropdown-content">
            <li><a class="dropdown-item" href="/public/home">Home</a></li>
            <li><a class="dropdown-item" href="/public/user">User Access</a></li>
            <li><a class="dropdown-item" href="/public/admin/inbox">Inbox</a></li>
            <li><a class="dropdown-item" href="/public/logout">Log out</a></li>
        </ul>
    </div>
</nav>