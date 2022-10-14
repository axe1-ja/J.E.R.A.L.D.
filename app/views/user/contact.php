<!-- Header of page -->
<?php
include '../app/views/layouts/header.php';
?>


<!-- Content of page -->
<?php
include '../app/views/user/components/user_nav.php';
?>

<div class="row">
    <div class="col mx-2">
    <a class="access"  class="text-white" style="color: white; font-size: 18px" href="/public/user">
                Accès clients >
            </a>
            <a class="access"  class="text-white" style="color: white; font-size: 18px" href="/public/user/profile"> 
                Contact
            </a>
    </div>
</div>

<div class="container mt-4">
    <div class="card center" style="width: 40rem; background-color:#B5D7FF">
        <div class="card-body">
            <button type="button" class="btn-close" aria-label="Close" style="position:relative; left:588px; top:-8px" onclick="javascript:history.back()"></button>
            <form class="text-start">
                <div class="mb-4 text-center">
                    <h3>Contactez-nous</h3>
                </div>
                <div class="mb-3">
                    <label for="exampleInputObject" class="form-label">Objet</label>
                    <input type="text" class="form-control" id="exampleInputObject" placeholder="Objet" id="validationCustom03" required>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Votre message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" id="validationCustom03" required></textarea>
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

<!-- Footer of page -->
<?php
include '../app/views/layouts/footer.php';
?>