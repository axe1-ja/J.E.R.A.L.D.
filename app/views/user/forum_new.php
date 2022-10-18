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
            <h5 class="fs-5">Tables</h5>
            <br>
            <ul class='navbar-nav'>
                <li class="nav-item"><a class="nav-link" href="/public/user/forum"><i class="bi bi-person"></i> Forum</a></li>
                <li class="nav-item"><a class="nav-link" href="/public/user/forum1"><i class="bi bi-person"></i> Forum 1</a></li>
                <li class="nav-item"><a class="nav-link" href="/public/user/forum2"><i class="bi bi-person"></i> Forum 2</a></li>
            </ul>
        </div>
        <div class="col pt-4">
            <div class="row">
                <form class="text-start">
                    <div class="mb-4 text-center">
                        <h3>Nouvel forum</h3>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputObjet" class="form-label">Votre Objet</label>
                        <input type="Objet" class="form-control" id="exampleInputObjet">
                    </div>
                    <div>
                        <label for="inputState" class="form-label">Type de forum</label>
                        <select id="inputState" class="form-select">
                        <option selected>Choisir ...</option>
                        <option selected>Forum 1</option>
                        <option selected>Forum 2</option>
                        </select>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Votre message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" id="validationCustom03" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Fichier</label>
                        <input class="form-control form-control" id="formFileSm" type="file">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 text-end">
                                <button type="submit" class="btn btn-primary">Envoyer</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>           
    </div>
</div>

<!-- Footer of page -->
<?php
include '../app/views/layouts/footer.php';
?>
