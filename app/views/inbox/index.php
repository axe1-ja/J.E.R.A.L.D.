<!-- Header of page -->
<?php
include '../app/views/layouts/header.php';
?>


<!-- Content of page -->
<?php
//if($data['user']->role=='admin'){
    include '../app/views/admin/components/admin_nav.php';
/*} else {
    include '../app/views/user/components/user_nav.php';
}*/
?>

<div class="row g-0">
    <div class="col-4 p-0 m-0">
        <ul class="conversations-index">
            <li class="title fs-4 p-3">All Conversations</li>
            <?php foreach($data['conversations'] as $conv): ?>
                <li class="conversationTab">
                    <h5><?php echo "Conversation with user ".$conv->user_id;?> <i class="bi bi-caret-right"></i></h5>
                    <p><em><?php echo end($data['messages'])->content; ?> .................</em></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="col p-0">
        <div class="conversation_container">
            <?php foreach($data['messages'] as $msg): ?>
                <div class="row">
                    <div class="col">
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

            <div class="input_container">
                <input class="dm_input" type="text" placeholder="Type a message..." name="sendMsg" id="">
            </div>
        </div>
    </div>

</div>




