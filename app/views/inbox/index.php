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
            <li class="title f-3 p-3">All Conversations</li>
            <?php foreach($data['interlocutors'] as $interl): ?>
                <li class="conversationTab">
                    <h5><?php echo "Conversation with user ".$interl->id;?> <i class="bi bi-caret-right"></i></h5>
                    <p><em><?php echo end($data['messages'])->content; ?> .................</em></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="col-8 p-0">
        <div class="conversation_container">
            <?php foreach($data['messages'] as $msg): ?>
                <div class="row">
                    <div class="col-12">
                        <?php if($data['thisUser']->role=='admin'): ?>
                            <?php if($msg->user_id==$data['thisUser']->id): ?>
                                <div class="messageSender">
                                    <?php echo $msg->content;?>
                                </div>
                            <?php else: ?>
                                <div class="messageReceiver">
                                    <?php echo $msg->content;?>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
            <p><br><br><br></p>

        </div>

        <div class="input_container">
            <form action="/public/inbox/send" method="post">
                <input class="dm_input" type="text" placeholder="Type a message..." name="message" id="">
                <button class="btn btn-outline-primary mr-2 d-inline inbox_sendButton" type="submit">Send</button>
            </form>
        </div>
            
    </div>

</div>




