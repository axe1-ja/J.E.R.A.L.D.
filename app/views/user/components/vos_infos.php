
<div class="mt-3">
    <div class="card center" style="width: 35rem;">
        <div class="card-body px-3">
            <!-- <div class="row">
                <div class="col-4">Identifiant de votre appareil</div>
                <div class="col-8">123132123132132</div>
            </div>-->
            <div class="row">
                <!--! div class="col-8">Gerald Latortue</div> -->
                <div class="col-12 text-center">
                    <h3 style="text-black">
                        <?php echo $data['user']->prenom." ".$data['user']->nom;?> 
                    </h3>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-4">Adresse e-mail</div>
                <div class="col-8"><?php echo $data['user']->email;?></div>
            </div>
            <div class="row my-2">
                <div class="col-4">Télephone</div>
                <div class="col-8"><?php echo $data['user']->phone;?></div>
            </div>
            <div class="row my-2">
                <div class="col-4">Adresse postale</div>
                <div class="col-8"><?php echo $data['user']->adress;?></div>
            </div>
            <div class="row my-2">
                <div class="col-4">Date de naissance</div>
                <div class="col-8"><?php echo $data['user']->dob ?? 'NA';?></div>
            </div>
            <div class="row my-2">
                <div class="col-4">Taille</div>
                <div class="col-8"><?php echo $data['user']->height ?? 'NA';?> m</div>
            </div>
            <div class="row my-2">
                <div class="col-4">Poids</div>
                <div class="col-8"><?php echo $data['user']->weight ?? 'NA';?> kg</div>
            </div>
            <div class="row mt-3 text-center">
                <div class="col-12">
                    <a href="/public/user/edit/profile" class="card-link"> 
                        <button class="btn btn-outline-primary">Modifier</button>
                    </a> 
                </div>
            </div>
        </div>
    </div>
</div>