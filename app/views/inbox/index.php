<!-- Header of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/header.php');
?>


<!-- Content of page -->
<?php
//if($data['user']->role=='admin'){
    include realpath(dirname(__DIR__,1) .'/admin/components/admin_nav.php');
/*} else {
    include realpath(dirname(__DIR__,1) .'/user/components/user_nav.php');
}*/
?>

<div class="row g-0">
    <div class="col-4 p-0 m-0">
        <ul class="conversations-index">

            <li class="title f-3 p-3 text-center">All Conversations</li>

            <?php foreach($data['interlocutors'] as $interl): ?>
                <li class="conversationTab">
                    <a href="/public/admin/inbox/<?php echo $interl->id?>">
                        <h5><?php echo "Conversation with ".$interl->nom.' '.$interl->prenom;?> <i class="bi bi-caret-right"></i></h5>
                        <p><em>
                            <?php if($interl->id==end($data['conv'][$interl->id])->user_id_send):?>
                                <?php echo $interl->prenom?> : <?php echo substr(end($data['conv'][$interl->id])->message_content,0,12); ?>
                                <?php if(strlen(end($data['conv'][$interl->id])->message_content)>12):?>...<?php endif;?>
                            <?php else:?>
                                You : <?php echo substr(end($data['conv'][$interl->id])->message_content,0,12); ?>
                                <?php if(strlen(end($data['conv'][$interl->id])->message_content)>12):?>...<?php endif;?>
                            <?php endif;?>
                        </em></p>
                    </a>
                </li>
            <?php endforeach; ?>

            <li class="title p-3 text-center"> <button class="btn btn-outline-primary"><i class="bi bi-plus-lg"></i> Add conversation </button> </li>

        </ul>
    </div>

    <div class="col-8 p-0">
        <div class="conversation_container">
            <?php 
            $msgs = $data['conv'][$data['interlocutorId']];
            ?>
            <?php foreach($msgs as $msg): ?>
                <div class="row">
                    <div class="col-12">
                        <?php if($msg->user_id_receive==$data['interlocutorId']): ?>
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
            <p><br><br><br></p>

        </div>

        <div class="input_container">
            <form action="/public/inbox/send" method="post">
                <input type="text" name="interlocutor" value="<?php echo $data['interlocutorId'];?>" class="d-none">
                <input class="dm_input" type="text" placeholder="Type a message..." name="message" id="">
                <button class="btn btn-outline-primary mr-2 d-inline inbox_sendButton" type="submit">Send</button>
            </form>
        </div>
            
    </div>

</div>


<script type='text/JavaScript'>
    window.scrollTo(0, document.body.scrollHeight);

</script>
