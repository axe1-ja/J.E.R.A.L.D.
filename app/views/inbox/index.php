<!-- Header of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/header.php');
?>

<div id="searchUser" class="w-100 h-100" style="background-color:rgba(0,0,0,0.4);position:fixed;z-index:2100;display:none">
    <div class="center modal" style="background-color:white;width:250px;margin-top:50px;border-radius:6px">
        <div class="row p-2">
            <div class="col-8">Send a message to</div>
            <div class="col-4 text-right"><i class="bi bi-x-lg"  onclick="document.getElementById('searchUser').style.display='none';"></i></div>
        </div>

        <div class="row p-2">
            <div class="col-12">
                <form action="/admin/inbox" method="post">
                    <select class="form-control mb-2" name="userChosen" id="userChosen">
                            <option value="" disabled selected>Selectionner un utilisateur</option>
                        <?php foreach($allUsers as $u) : ?>
                            <option value="<?php echo $u->id; ?>"><?php echo $u->prenom.' '.$u->nom; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label for="msg">Message</label>
                    <input type="text" name="msg" id="msg" placeholder="Type a message...">
                    <div class="w-100 text-center mt-2">
                        <button type="submit" class="btn btn-outline-green"> Start a conversation </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Content of page -->
<?php
//if($user->role=='admin'){
    include realpath(dirname(__DIR__,1) .'/admin/components/admin_nav.php');
/*} else {
    include realpath(dirname(__DIR__,1) .'/user/components/user_nav.php');
}*/
?>

<div class="row g-0">
    <div class="col-4 p-0 m-0">
        <ul class="conversations-index">

            <li class="title f-3 p-3 text-center">All Conversations</li>
            
            <?php if(isset($interlocutors)): ?>
                <?php foreach($interlocutors as $interl): ?>
                    <li class="conversationTab <?php if($interlocutorId==$interl->id):?>active<?php endif;?>">
                        <a href="/admin/inbox/<?php echo $interl->id?>">
                            <h5><?php echo "".$interl->prenom.' '.$interl->nom;?> <i class="bi bi-caret-right"></i></h5>
                            <?php $lastmsg = end($conv[$interl->id]) ?>
                            <div class="row">
                                <div class="col-6 f-1">
                                    <em>
                                        <?php if($interl->id==$lastmsg->user_id_send):?>
                                            <?php echo $interl->prenom?> : <?php echo substr($lastmsg->message_content,0,12); ?>
                                            <?php if(strlen($lastmsg->message_content)>12):?>...<?php endif;?>
                                        <?php else:?>
                                            You : <?php echo substr($lastmsg->message_content,0,12); ?>
                                            <?php if(strlen($lastmsg->message_content)>12):?>...<?php endif;?>
                                        <?php endif;?>
                                    </em>
                                </div>
                                <div class="col-6 f-1 text-right">
                                    <em>
                                        <?php echo $lastmsg->message_datetime?>
                                    </em>
                                </div>
                            </div>
                        </a>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>

            <li class="title p-3 text-center"> 
                <button class="btn btn-outline-primary" onclick="document.getElementById('searchUser').style.display='block';">
                    <i class="bi bi-plus-lg"></i> Add conversation 
                </button> 
            </li>

        </ul>
    </div>

    <div class="col-8 p-0">
        <div class="conversation_container">
            <?php
            if($interlocutorId!=false){
                $msgs = $conv[$interlocutorId];
            } else {
                $msgs = false;
            }
            ?>
            
            <?php if($msgs != false): ?>
                <?php foreach($msgs as $msg): ?>
                    <div class="row">
                        <div class="col-12">
                            <?php if($msg->user_id_receive==$interlocutorId): ?>
                                <div class="messageSender">
                                    <?php echo $msg->message_content;?>
                                </div>
                            <?php else: ?>
                                <div class="messageReceiver">
                                    <?php echo $msg->message_content;?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="row">
                    <div class="col-12">
                        Vous n'avez pas de messages... <a onclick="document.getElementById('searchUser').style.display='block';"><u class="text-primary">écrire à quelqu'un</u></a>
                    </div>
                </div>
            <?php endif; ?>
            <p><br><br><br></p>

        </div>

        <?php if($msgs != false): ?>
            <div class="input_container">
                <form action="/inbox/send" method="post">
                    <input type="text" name="interlocutor" value="<?php echo $interlocutorId;?>" class="d-none">
                    <input class="dm_input" type="text" placeholder="Type a message..." name="message" id="">
                    <button class="btn btn-outline-primary mr-2 d-inline inbox_sendButton" type="submit">Send</button>
                </form>
            </div>
        <?php endif; ?>
            
    </div>

</div>


<script type='text/JavaScript'>
    window.scrollTo(0, document.body.scrollHeight);
</script>
