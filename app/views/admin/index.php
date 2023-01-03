<!-- Header of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/header.php');
?>


<!-- Content of page -->
<?php
include realpath(dirname(__DIR__,1) .'/admin/components/admin_nav.php');
?>

<div class="container">
    <div class="row">

        <!-- Card avec les infos de l'Admin connecté -->
        <div class="col-3 p-2">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-2">
                            <h4 class="card-title"><i class="bi bi-person-square"></i></h4>
                        </div>
                        <div class="col-10 text-center">
                            <h4 class="card-title">Admin user</h4>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <p class="card-text">Name: : <?php echo $data['user'] ?></p>
                            <p class="card-text">Company: : EKAÏ</p>
                            <p class="card-text">Company position: Developer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card avec des stats generales -->
        <div class="col-3 p-2">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-2">
                            <h4 class="card-title"><i class="bi bi-bar-chart"></i></h4>
                        </div>
                        <div class="col-10 text-center">
                            <h4 class="card-title">Stats</h4>
                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col-12">
                            <p class="card-text">Users: <?php echo $data['stats']['users'] ?></p>
                            <p class="card-text">Visitor growth: <span class="text-success">+21%</span></p>
                            <p class="card-text">Products sold: <?php echo $data['stats']['products'] ?></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Card avec les denieres notifications -->
        <div class="col-3 p-2">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-2">
                            <h4 class="card-title"><i class="bi bi-bell"></i></h4>
                        </div>
                        <div class="col-10 text-center">
                            <h4 class="card-title">Latest notifications</h4>
                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col-12">
                            <?php $i=0 ?>
                            <?php foreach($data['notifs'] as $n): ?>
                                <span class="card-text d-block"><i class="bi bi-exclamation"></i> <?php echo $n;?> <a href="#notif<?php echo $i?>">view</a></span>
                                <?php $i++ ?>
                            <?php endforeach; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Card avec les denieres notifications -->
        <div class="col-3 p-2">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">....</h4>
                    <p class="card-text">....: ....</p>
                    <p class="card-text">.... ...: ....</p>
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <!-- Card pour gérer les données -->
        <div class="col-6 p-2">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-2">
                            <h4 class="card-title"><i class="bi bi-clipboard-data"></i></h4>
                        </div>
                        <div class="col-10 text-center">
                            <h4 class="card-title">Data Management</h4>
                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col-12">
                            <h5 class="card-text">Users: <a href="/public/admin/datama/users">Manage Users</a></h5>
                            <h5 class="card-text">Products: <a href="/public/admin/datama/products">Manage Products</a></h5>
                            <h5 class="card-text">Forums: <a href="/public/admin/datama/forum">Manage Forums</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card pour ... -->
        <div class="col-6 p-2">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Lorem Ipsum </h4>
                    <h5 class="card-text">.....: <a href="#">...link..</a></h5>
                    <h5 class="card-text">.....: <a href="#">... link....</a></h5>
                    <h5 class="card-text">...: <a href="#">.... .link...</a></h5>
                </div>
            </div>
        </div>

    </div>


</div>

<!-- Footer of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/footer.php');
?>