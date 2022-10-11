<!-- Header of page -->
<?php
include '../app/views/layouts/header.php';
?>

<!-- Content of page -->
<img src="../public/resources/storage/Images/goutte.jpg" class="w-100 background-image" alt="">

<?php
include '../app/views/general_components/navbar.php';
?>

<div class="conainer mt-4">
    <div class="card center" style="width: 40rem; background-color:#B5D7FF">
        <div class="card-body">
            <form class="text-start">
                <div class="mb-4 text-center">
                    <h3>Contactez-nous</h3>
                </div>
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Nom Prénom</label>
                    <input type="text" class="form-control" id="exampleInputName">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Adresse e-mail</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Votre message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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