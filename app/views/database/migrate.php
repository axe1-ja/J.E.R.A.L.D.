<!-- Header of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/header.php');
?>


<div class="container w-100">
    <div class="w-75 center text-center">
        <p><br><br></p>
        <?php if(isset($msg)) :?>
            <div class="bg-green f-2 p-2 border-round-1">
                <?php echo $msg;?>
            </div>
        <?php endif;?>
        <form action="/migrate" method='post'>
            <input class="my-3" type="password" name='password' placeholder="Ecrire le bon mot de passe pour lancer la migration...">
            <button class="my-2 btn btn-outline-primary" type='submit'> Migrate! </button>
        </form>
    </div>
</div>

<!-- Footer of page -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>
