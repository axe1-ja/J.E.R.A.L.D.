<!-- Header of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/header.php');
?>


<!-- Content of page -->
<?php
include realpath(dirname(__DIR__,1) .'/user/components/user_nav.php');
?>


<div class="row pt-4">
    <div class="col-6">

        <ul class="float-left" style='list-style-type:none'>
            <li class="nav-item d-inline-block"><a class="nav-link" href="/public/user/forum"><i class="bi bi-person"></i> ALL</a></li>
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
            <table class="table table-striped table-hover" role = 'button'>
                <thead>
                    <tr>
                        <th>Nombre de Forum</th>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Sujet</th>
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

<div class='row'>
    <div class="col-12 text-center">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center ">
            <?php for ($forumpage = 1; $forumpage <= ceil($data['page'][0]/10); $forumpage ++) { ?>
                <li class="page-item"><a class="page-link" href="/public/user/<?php echo $data['model']?>_p<?php echo $forumpage?>" ><?php echo $forumpage; ?></a></li>
                <?php } ?>
            </ul>
        </nav>
    </div>
</div>


<button class="btn btn-outline-primary" id="bouton">  Écrire <i class="bi bi-pen"></i></button>


<div class="container">
    <div class="card center hide" id='pageform' style="width: 40rem">
        <div class="card-body">
            <div class="row">
                <div class="col-11">
                    <div class="text-center">
                        <h3>Nouveau forum</h3>
                    </div>
                </div>
            </div>  
            <form class="text-left" action="report" method="post" style="display=none">
                <div class="mb-3">
                    <label for="exampleInputObjet" class="form-label">Votre Sujet</label>
                    <input type="Objet" placeholder="Sujet" class="form-control" id="exampleInputObjet">
                </div>
                <div class="mb-3">
                    <label for="inputState" class="form-label">Type de forum</label>
                    <select id="inputState" class="form-select">
                    <option selected>Forum 1</option>
                    <option selected>Forum 2</option>
                    </select>
                </div>  
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Votre message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" id="validationCustom03"  placeholder="Message" required></textarea>
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
    </div>           
</div>



<script>
    btn=document.getElementById("bouton")
    form=document.getElementById("pageform")
    btn.onclick=function() {
        form.classList.toggle("hide")
    }
</script>

<!-- Footer of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/footer.php');
?>
