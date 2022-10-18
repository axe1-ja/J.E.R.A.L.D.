<!-- Header of page -->
<?php
include '../app/views/layouts/header.php';
?>


<!-- Content of page -->
<?php
include '../app/views/admin/components/admin_nav.php';
?>

<div class="container">
    <div class="row py-5">

        <!-- Card avec les infos de l'Admin connecté -->
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Admin user: <?php echo $data['user'] ?></h4>
                    <p class="card-text">Company position: Developer</p>
                </div>
            </div>
        </div>

        <!-- Card avec des stats generales -->
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Stats</h4>
                    <p class="card-text">Users: <?php echo $data['stats']['users'] ?></p>
                    <p class="card-text">Products sold: <?php echo $data['stats']['products'] ?></p>
                </div>
            </div>
        </div>

        <!-- Card avec les denieres notifications -->
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Latest notifications:</h4>

                    <?php $i=0 ?>
                    <?php foreach($data['notifs'] as $n): ?>
                        <span class="card-text d-block"><?php echo $n;?> <a href="#notif<?php echo $i?>">view</a></span>
                        <?php $i++ ?>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>

        <!-- Card avec les denieres notifications -->
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">....</h4>
                    <p class="card-text">....: ....</p>
                    <p class="card-text">.... ...: ....</p>
                </div>
            </div>
        </div>

    </div>

    <div class="row py-5">

        <!-- Card pour gérer les données -->
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Management</h4>
                    <h5 class="card-text">Users: <a href="/public/admin/datama/users">Manage Users</a></h5>
                    <h5 class="card-text">Products: <a href="/public/admin/datama/products">Manage Products</a></h5>
                    <h5 class="card-text">Forums: <a href="/public/admin/datama/forum">Manage Forums</a></h5>
                </div>
            </div>
        </div>

        <!-- Card pour ... -->
        <div class="col">
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
include '../app/views/layouts/footer.php';
?>