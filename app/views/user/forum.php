<!-- Header of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/header.php');
?>


<!-- Content of page -->
<?php
include realpath(dirname(__DIR__,1) .'/user/components/user_nav.php');
?>

<p><br></p>

<div class="container">

    <div class="card w-75 center">
        <div class="row">
            <div class="col-12 text-center f-3">
                Tous les forums
            </div>
            <br>
            <div class="col-12 text-center">
                <h5 class="w-75 center text-grey">
                    Ici sont listés tous les récents forums qui pourraient vous intéresser, n'hésitez pas à les consulter en cas de problèmes, ou pour aider les autres internautes à résoudre des problèmes que vous avez vous-même réussi à résoudre.
                </h5>
            </div>
        </div>
    </div>

    <div class="container my-3">
        <div class="center w-75 text-right">
            <a href="#bouton"><u class='text-primary'>Poser une question aux internautes</u></a>
        </div>
    </div>

    <?php foreach($data['forums'] as $f) :?>
        <div class="card w-75 center">
            <div class="row">
                <div class="col-6 px-2">
                    <?php $user = $data['users'][$f->User_id];?>
                    <div>
                        <div class="d-inline-block">
                            <div class="bg-<?php echo getUserColor($f->User_id)?> text-white forum-circle">
                                <?php $user= $data['users'][$f->User_id]?>
                                <?php echo $user->prenom[0]."".$user->nom[0]?>
                            </div>
                        </div>
                        <div class="d-inline-block px-2">
                            <h5 class="text-black">
                                De : <?php echo $user->prenom." ".$user->nom;?> 
                            </h5>
                        </div>
                    </div>
                    <?php echo 'Sujet : '.$f->object;?>
                </div>
                <div class="col-6 text-right p-2">
                    <?php echo getDateAndTimeDisplay($f->datetime);?>
                    <div class='pt-2'>
                        <form action="/public/forum/details" method="post">
                            <input type="text" name="forum" value='<?php echo $f->id;?>' class="d-none">
                            <button type='submit' class="btn btn-outline-primary">See forum details <i class="bi bi-caret-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
    <?php endforeach;?>

</div>
<!--
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
    <table class="table table-striped table-hover" role = 'button'>
        <thead>
            <tr>
                <th>Forum Number</th>
                <th>Forum objet</th>
                <th>Forum Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data['data'] as $el):   ?>

                <tr>
                    <th scope="row"><?php echo $el['Forum_id'];?></th>
                    <td><?php echo $el['Forum_object'];?></td>
                    <td><?php echo $el['Forum_datetime'];?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<div>
    <div class='row'>
        <div class="col-12 text-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center ">
                <li class='page-item'><a class="page-link" href="/public/user/forum">1</a></li>
                <?php for ($forumpage = 2; $forumpage <= ceil($data['page'][0]/10); $forumpage ++) { ?>
                    <li class="page-item"><a class="page-link" href="/public/user/<?php echo $data['model']?>_p<?php echo $forumpage?>" ><?php echo $forumpage; ?></a></li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
    </div>
</div>
-->


<div class="w-100 text-center">
    <button class="btn btn-outline-primary" id="bouton">  Écrire un forum <i class="bi bi-pen"></i></button>
</div>

<br>

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
                <input type="text" class="d-none" name="user" value="<?php echo $data['user']->id?>">
                <div class="mb-3">
                    <div class="form-label">Le sujet de votre forum</div>
                    <input type="Objet" placeholder="Sujet" class="form-control" id="subject">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Votre message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" id="validationCustom03"  placeholder="Message" required></textarea>
                </div>
                <!--<div class="mb-3">
                    <label for="formFileSm" class="form-label">Fichier</label>
                    <input class="form-control form-control" id="formFileSm" type="file">
                </div>-->
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
