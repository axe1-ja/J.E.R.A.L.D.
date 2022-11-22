<!-- Header of page -->
<?php
include '../app/views/layouts/header.php';
?>


<!-- Content of page -->
<?php
include '../app/views/admin/components/admin_nav.php';
?>

<div class="container">
    <div class="sidebar-container">
        <h3 class="f-4">Tables</h3>
        <ul class='sidebar'>
            <li class="sidebar-item">
                <a class="sidebar-link <?php if($data['model']=='users'): ?>active<?php endif; ?>" href="/public/admin/datama/users"><i class="bi bi-person"></i> Users</a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link <?php if($data['model']=='products'): ?>active<?php endif; ?>" href="/public/admin/datama/products"><i class="bi bi-watch"></i> Products</a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link <?php if($data['model']=='forum'): ?>active<?php endif; ?>" href="/public/admin/datama/forum"><i class="bi bi-chat-left-text"></i> Forum</a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link <?php if($data['model']=='roles'): ?>active<?php endif; ?>" href="/public/admin/datama/roles"><i class="bi bi-person "></i> Roles</a>
            </li>
        </ul>
    </div> 
    <div class="row pl-5">
        <div class="col-12 px-5">
            <div class="row">
                <div class="col-8">
                    <h3 class="m-0 f-4 m-0"><?php echo ucfirst($data['model']);?></h3>
                </div>
                <div class="col-4">
                    <form class="d-flex" role="search">
                        <div class="row mt-3">
                            <div class="col-8">
                                <input class="form-control w-100" name="searchDb" id="search" type="search" placeholder="Search" aria-label="Search">
                            </div>
                            <div class="col-4 text-left pl-1">
                                <button class="btn btn-outline-primary" id="searchBtn" type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12 pt-1">
                <table class="table">
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