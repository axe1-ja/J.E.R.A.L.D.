
<div class="mt-3">
    <div class="card center" style="width: 50rem;max-width:90%">
        <div class="card-body px-3">
            <div class="row">
                
                <div class="col-6 profile-pic">
                    <label class="mt-4 -label" for="file">
                        <span style="color:#181C8D">Change Image</span>
                    </label>
                    <input id="file" type="file" onchange="loadFile(event)"/>
                    <img src="public\resources\storage\Images\avatar.png" id="output" width="200"/>
                </div>
                <div class="col-6">
                    <h3 class="text-center" style="text-black">
                        <?php echo $data['user']->prenom." ".$data['user']->nom;?> 
                    </h3>
                    <div class="row my-2">
                        <div class="col-4">Adresse e-mail&nbsp</div>
                        <div class="col-8"><?php echo $data['user']->email;?></div>
                    </div>
                    <div class="row my-2">
                        <div class="col-4">Téléphone&nbsp</div>
                        <div class="col-8"><?php echo $data['user']->phone;?></div>
                    </div>
                    <div class="row my-2">
                        <div class="col-4">Adresse postale&nbsp</div>
                        <div class="col-8"><?php echo $data['user']->adress;?></div>
                    </div>
                    <div class="row my-2">
                        <div class="col-4">Date de naissance&nbsp</div>
                        <div class="col-8"><?php echo $data['user']->dob ?? 'NA';?></div>
                    </div>
                    <div class="row my-2">
                        <div class="col-4">Taille&nbsp</div>
                        <div class="col-8"><?php echo $data['user']->height ?? 'NA';?> cm</div>
                    </div>
                    <div class="row my-2">
                        <div class="col-4">Poids&nbsp</div>
                        <div class="col-8"><?php echo $data['user']->weight ?? 'NA';?> kg</div>
                    </div>
                    <div class="row my-2">
                        <div class="col-4">Identifiant appareil&nbsp</div>
                        <div class="col-8"><?php echo $data['bracelet']->bracelet_id ?? 'NA';?></div>
                    </div>
                </div>
            </div>    
            <div class="row mt-3 text-center">
                <div class="col-12">
                    <a href="/user/edit/profile" class="card-link"> 
                        <button class="btn btn-outline-primary">Modifier</button>
                    </a> 
                </div>
            </div>
        </div>
    </div>
</div>
<ul>
</ul>
<!--
<div class="mt-4">
    <div class="card center" style="width: 50rem;">
        <div class="card-body px-3">
            <div class="row">
                <div class="col-6 bracelet-pic">
                    <img src="public\resources\storage\Images\Bracelet.png" width="200"/>
                </div>
                <div class="col-6">
                    <!--h3 class="text-center" style="text-black">
                        <div class="col-8"><!?php echo $data['bracelet']->bracelet_id;?></div>
                    </h3-->
                    <div class="row my-2">
                        <div class="col-4">Identifiant appareil&nbsp</div>
                        <div class="col-8"><?php echo $data['bracelet']->bracelet_id ?? 'NA';?></div>
                    </div>
                </div>
            </div>    
            <div class="row mt-3 text-center">
                <div class="col-12">
                    <a href="/user/edit/profile" class="card-link"> 
                        <button class="btn btn-outline-primary">Modifier</button>
                    </a> 
                </div>
            </div>
        </div>
    </div>
</div>
-->