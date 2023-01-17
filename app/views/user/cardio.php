<!-- Header of page -->
<?php
include realpath(dirname(__DIR__,1) .'/layouts/header.php');
?>
<img src="/resources/storage/Images/fond.jpg" class="w-100 background-image" alt="">

<!-- Content of page -->
<?php
include realpath(dirname(__DIR__,1) .'/user/components/user_nav.php');
?>

<div class="text-center p-3">
    <div class="row">
        <div class="col-3 text-left">
            <a class="access"  class="text-white" style="color: white; font-size: 18px" href="/home">
                Accueil >
            </a>
            <a class="access"  class="text-white" style="color: white; font-size: 18px" href="/user/"> 
                Santé >
            </a>
            <a class="access"  class="text-white" style="color: white; font-size: 18px" href="/user/cardio"> 
            FC
            </a>
        </div>
    </div> 

    <div class="row pt-3">
        <div class="col-6">
            <h2 class="text-white"> 
                Bonjour, <?php echo $data['user']->prenom." ".$data['user']->nom;?>
            </h2>
            <h2 class="text-white"> 
                Votre rythme cardiaque est de ... bpm.
            </h2>
            <h2 class="text-white"> 
                Ce qui signifie que vous avez un ryhtme cardiaque ...
            </h2>
        </div>
        <div class="col-6">
            <h2 class="text-white square bg-primary" > 
                lent
            </h2>
            <h2 class="text-white square bg-green"> 
                normal
            </h2>
            <h2 class="text-white square bg-red"> 
                élevé
            </h2>
        </div>
    </div>
    <div class="container">
            <div class="graph">
                <canvas id="lineChart" style="background:white;"></canvas>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>  
                
                const labels = [
                    '0',
                    '1',
                    '2',
                    '3',
                    '4',
                    '5',
                    '6',
                    '7',
                    '8',
                    '9',
                    '10',
                    '11',
                    '12',
                    '13',
                    '14',
                    '15',
                    '16',
                    '17',
                    '18',
                    '19',
                    '20',
                    '21',
                    '22',
                    '23',
                    '0'
                ];

                const data = {
                labels: labels,
                datasets: [{
                    label: 'Evolution de votre fréquence cardiaque',
                    data: [65, 59, 80, 81, 56, 55, 40, 55, 68, 75, 59, 52, 64, 76, 83, 86, 85, 84, 85, 80, 73, 67, 61, 59 ],
                    fill: false,
                    borderColor: '#181C8D',
                    backgroundColor: 'aliceblue',
                    tension: 0.1 
                    }]
                };

                const config = {
                type: 'line',
                data: data,
                options: {
                    scales: 
                    {x: { title: { display: true, text: 'heure de la journée' }},
                    y: {suggestedMin: 30, suggestedMax: 180, title: { display: true, text: 'fréquence cardiaque' }}},

                    plugins: 
                    {title: {display: true, text: 'Evolution de votre temprature cardiaque'}},
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
