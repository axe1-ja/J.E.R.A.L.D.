<!-- Header of page -->
<?php
include '../app/views/layouts/header.php';
?>


<!-- Content of page -->
<?php
include '../app/views/admin/components/admin_nav.php';
?>

<div class="container">
    <div class="row">
        <div class="col-2 pt-4">
            <h5 class="f-2">Tables</h5>
            <br>
            <ul class='navbar-nav'>
                <li class="nav-item"><a class="nav-link" href="/public/admin/datama/users"><i class="bi bi-person"></i> Users</a></li>
                <li class="nav-item"><a class="nav-link" href="/public/admin/datama/products"><i class="bi bi-watch"></i> Products</a></li>
                <li class="nav-item"><a class="nav-link" href="/public/admin/datama/forum"><i class="bi bi-chat-left-text"></i> Forum</a></li>
                <li class="nav-item"><a class="nav-link" href="/public/admin/datama/roles"><i class="bi bi-person "></i> Roles</a></li>
            </ul>
        </div>
        <div class="col-12 pt-4">
            <div class="row">
                <div class="col-8">
                    <h5 class="f-4"><?php echo ucfirst($data['model']);?></h5>
                </div>
                <div class="col-4">
                    <form class="d-flex" role="search">
                        <input class="form-control mr-2" name="searchDb" id="search" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-primary" id="searchBtn" type="submit">Search</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12 pt-3">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <?php foreach($data['cols'] as $col): ?>
                                <th><?php echo $col;?></th>
                            <?php endforeach; ?>
                        </tr>
                    </thead>
                        <tbody>
                            <?php foreach($data['data'] as $el): ?>
                                <tr>
                                    <th scope="row"><?php echo $el[0];?></th>
                                    <td><?php echo $el[1];?></td>
                                    <td><?php echo $el[2];?></td>
                                    <td><?php echo $el[3];?></td>
                                    <td><?php echo $el[4];?></td>
                                    <td><?php echo $el[5];?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<p style='margin-bottom:300px;'><br><br></p>
<!-- Footer of page -->
<?php
include '../app/views/layouts/footer.php';
?>