<!-- Header of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/header.php');
?>


<!-- Content of page -->
<?php
include realpath(dirname(__DIR__,1) .'/user/components/user_nav.php');
?>

<div>
    <div>
        <div class="row pt-4">
            <div class="col-6">

                <ul class="float-left" style='list-style-type:none'>
                    <li class="nav-item d-inline-block"><a class="nav-link" href="/public/user/forum"><i class="bi bi-person"></i> Forum</a></li>
                    <li class="nav-item d-inline-block"><a class="nav-link" href="/public/user/forum1"><i class="bi bi-person"></i> Forum 1</a></li>
                    <li class="nav-item d-inline-block"><a class="nav-link" href="/public/user/forum2"><i class="bi bi-person"></i> Forum 2</a></li>
                </ul>
            </div>
            <div class="col-6 text-right">
                <form class = 'float-right' role="search" >
                            <input class="form-control mr-2" name="searchDb" id="search" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-primary" id="searchBtn" type="submit">Search</button>
                </form>
            </div>
        </div>
        <div>
            <div>
                <div>
                    <table class="table table-striped table-hover" role = 'button'>
                        <thead>
                            <tr>
                                <th>Forum Number</th>
                                <th>Name</th>
                                <th>Last Name</th>
                                <th>Forum objet</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data['data'] as $el): ?>
                                <tr>
                                    <th scope="row"><?php echo $el[0];?></th>
                                    <td><?php echo $el[2];?></td>
                                    <td><?php echo $el[3];?></td>
                                    <td><?php echo $el[4];?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div>
            <div class="mb-3 text-right pt-3" >
            <a class="btn btn-outline-primary " href="/public/user/forum_new" role="button">Ecrire</a>
        </div>
        <div class='row'>
            <div class="col-12 text-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center ">
                    <li class='page-item'><a class="page-link" href="/public/user/forum">1</a></li>
                    <?php for ($forumpage = 2; $forumpage <= 3; $forumpage ++) { ?>
                        <li class="page-item"><a class="page-link" href="/public/user/<?php echo $data['model']?>_p<?php echo $forumpage?>" ><?php echo $forumpage; ?></a></li>
                        <?php } ?>
                    </ul>
                </nav>
            </div>
        </div>
<!-- Footer of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/footer.php');
?>
