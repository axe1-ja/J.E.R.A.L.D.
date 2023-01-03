<!-- Header of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/header.php');
?>


<!-- Content of page -->
<?php
include realpath(dirname(__DIR__,1) .'/user/components/user_nav.php');
?>

<div class="container">
        <form class="text-center">
                    <div class="text-center">
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
                        <div class="col-12">
                            <div class="mb-3 text-right">
                                <button type="submit" class="btn btn-primary">Envoyer</button>
                            </div>
                        </div>
                    </div>
                </form>


</div>
<!-- Footer of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/footer.php');
?>
