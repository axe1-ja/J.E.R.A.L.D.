<!-- Header of page -->
<?php
include '../app/views/layouts/header.php';
?>


<!-- Content of page -->
<?php
include '../app/views/user/components/user_nav.php';
?>

<div class="container">
    <div class="row">
        <div class="col-2 pt-4">
            <br>
            <ul class='navbar-nav'>
                <li class="nav-item"><a class="nav-link" href="/public/user/forum"><i class="bi bi-person"></i> Forum</a></li>
                <li class="nav-item"><a class="nav-link" href="/public/user/forum1"><i class="bi bi-person"></i> Forum 1</a></li>
                <li class="nav-item"><a class="nav-link" href="/public/user/forum2"><i class="bi bi-person"></i> Forum 2</a></li>
            </ul>
        </div>
        <div class="col pt-4">
            <div class="row">
                <div class="col">
                </div>
                <div class="col-4">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" name="searchDb" id="search" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-primary" id="searchBtn" type="submit">Search</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col pt-3">
                <table class="table table-striped table-hover" role = 'button'>
                    <thead>
                        <tr>
                            <th scope="col">Forum Number</th>
                            <th scope="col">Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Forum objet</th>
                        </tr>
                    </thead>
                        <tbody>
                            <?php foreach($data['data'] as $el): ?>
                                <tr>
                                    <th scope="row"><?php echo $el[0];?></th>
                                    <td><?php echo $el[1];?></td>
                                    <td><?php echo $el[2];?></td>
                                    <td><?php echo $el[3];?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 text-end" >
            <a class="btn btn-outline-primary" href="/public/user/forum_new" role="button">Ecrire</a>
            </div>
        </div>
                     
    </div>
</div>

<!-- Footer of page -->
<?php
include '../app/views/layouts/footer.php';
?>
