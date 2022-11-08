<!-- Header of page -->
<?php
include '../app/views/layouts/header.php';
?>


<!-- Content of page -->
<?php
include '../app/views/admin/components/admin_nav.php';
?>

<div class="container">
    <div class="row">
        <div class="col">
            <h4>Notifications:</h4>
        </div>
    </div>
    <div class="row">
        <div class="col pt-4">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Preview</th>
                        <th scope="col">Sent by</th>
                        <th scope="col">Catergory</th>
                        <th scope="col">Date and Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['notifs'] as $n): ?>
                        <tr>
                            <th scope="row"><?php echo $n[0];?></th>
                            <td><?php echo $n[1];?></td>
                            <td><?php echo substr($n[2],0,20).'...';?></td>
                            <td><?php echo $n[3];?></td>
                            <td><?php echo $n[4];?></td>
                            <td><?php echo $n[5];?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Footer of page -->
<?php
include '../app/views/layouts/footer.php';
?>