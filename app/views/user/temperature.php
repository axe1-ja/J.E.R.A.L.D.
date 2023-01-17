<!-- Header of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/header.php');
?>

<!-- Content of page -->
<img src="/public/resources/storage/Images/fond.jpg" class="w-100 background-image" alt="">
<?php
include realpath(dirname(__DIR__,1) .'/user/components/user_nav.php');
?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="text-center p-3">
    <div class="row">
        <div class="col-3 text-left">
            <a class="access"  class="text-white" style="color: white; font-size: 18px" href="/public/home">
                Accueil >
            </a>
            <a class="access"  class="text-white" style="color: white; font-size: 18px" href="/public/user/"> 
                Santé >
            </a>
            <a class="access"  class="text-white" style="color: white; font-size: 18px" href="/public/user/cardio"> 
            TC
            </a>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="square">
                <h2 class="text-white"> 
                    Bonjour, <?php echo $data['user']->prenom." ".$data['user']->nom;?>
                </h2>
                <h2 class="text-white"> 
                    Votre temperature corporelle est de ... °C
                </h2>
        </div>
    </div>
    <div class="container">
            <div class="graph">
                <canvas id="lineChart" style="background:white;"></canvas>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>  
                
                const labels = [
                    '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16',
                     '17', '18', '19', '20', '21', '22', '23','0'
                ];

                const data = {
                labels: labels,
                datasets: [{
                    label: 'Evolution de votre temperature corporelle',
                    data: [35, 36, 36, 37, 36, 35, 36, 36, 36, 37, 36, 36, 36, 36, 36, 35, 36, 35, 36, 36, 35.5, 36.7, 36.4 ],
                    fill: false,
                    borderColor: '#181C8D',
                    backgroundColor: 'aliceblue',
                    fontsize: 20,
                    tension: 0.1 
                    }]
                };

                const config = {
                type: 'line',
                data: data,
                options: {
                    scales: 
                    {x: { title: { display: true, text: 'heure de la journée' }},
                    y: { suggestedMin: 30, suggestedMax: 40, title: { display: true, text: 'temperature corporelle' }}}, 

                    plugins: 
                    {title: {display: true, text: 'Evolution de votre temprature corporelle'}},
                    }
                };
                

                const myChart = new Chart(
                document.getElementById('lineChart'),
                config
                );

                </script>
            </div>
           
    </div>

</div>

<!-- Footer of page -->
<?php
include '../app/views/general_components/footer.php';
?>

