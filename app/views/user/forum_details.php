<!-- Header of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/header.php');
?>


<!-- Content of page -->
<?php
include realpath(dirname(__DIR__,1) .'/user/components/user_nav.php');
?>


<div class="container">
    <div class="card w-75 center">
        <div class="row">

            <div class="col-12 text-center f-3 p-2">
            <?php echo $forum->object;?>
            </div>

            <div class="col-12 text-left f-1 px-2">
                <?php echo getDateAndTimeDisplay($forum->datetime);?>
            </div>

            <div class="col-12 text-left f-2 p-2">
                <div class="d-inline-block">
                    <?php $user= $users[$forum->User_id]?>
                    <div class="bg-<?php echo getUserColor($forum->User_id)?> text-white forum-circle">
                        <?php echo $user->prenom[0]."".$user->nom[0]?>
                    </div>
                </div>
                <div class="d-inline-block px-2">
                    <h5 class="text-black">
                        <?php echo $user->prenom." ".$user->nom;?> 
                    </h5>
                </div>

                <br>

                <?php echo $forum->content;?>
            </div>

        </div>
    </div>
</div>

<div class="container my-3">
    <div class="center w-75 text-right">
        <a href="#message"><u class='text-primary'>Répondre à ce message</u></a>
    </div>
</div>

<div class="container" id="responses">
    <?php $count=0; foreach($forumMessages as $f) :?>
        <?php $count++;
        if($count<=10):?>

            <div class="card w-75 center">
            
                <div class="row">
                    <div class="col-6">
                        <div class="d-inline-block">
                            <div class="bg-<?php echo getUserColor($f->User_id)?> text-white forum-circle">
                                <?php $user= $users[$f->User_id]?>
                                <?php echo $user->prenom[0]."".$user->nom[0]?>
                            </div>
                        </div>
                        <div class="d-inline-block px-2">
                            <h5 class="text-black">
                                De : <?php echo $user->prenom." ".$user->nom;?> 
                            </h5>
                        </div>
                    </div>
                    <div class="col-6 text-right f-1 p-2">
                        <?php echo getDateAndTimeDisplay($f->datetime);?> 
                    </div>
                </div>
                <br>

                <?php echo $f->content;?>

            </div>
            <br>

        <?php else:?>
            <div class="text-center">
                <button type="reset" class="btn btn-outline-primary"> Load more results...</button>
            </div>
        <?php endif;?>

    <?php endforeach;?>
</div>

<div class="container">
    <div class="card center w-75">
        <div class="card-body text-center">
            <form class="w-75 center" action="report" method="post" style="display=none">
                <div class="mb-3">
                    <input type="text" class="d-none" name="user" value="<?php echo $user->id?>">
                    <input type="text" class="d-none" name="forum" value="<?php echo $forum->id?>">
                    <div class="my-2">Votre message</div>
                    <textarea class="form-control" rows="1" id="message" name="new_msg" placeholder="Message" required></textarea>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
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
