<?php
include_once 'SideBar.php';
$userDataStorage = shell_exec("sudo bash /home/groupe20/usedstorage.sh $userName" . " 2>&1");
?>
    <div class="main-content">
        <div class="container">
            <h1 class="text-center"></h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                         Used Storage <?php  echo $userDataStorage; ?> 
                        </div>
                        <div class="card-body">
                        <div class="donut" style="position: relative; height:35%; width:35%">
  <canvas id="myChart" ></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');
  new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: [
            'Available Storage',
            'Used Storage'
        ],
      datasets: [{
        
        data: [27000,50],
        backgroundColor: [
      'rgb(252, 246, 189)',
      'rgb(228, 193, 249)'],
        borderWidth: 1
      }]
    },
  });
</script>
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>