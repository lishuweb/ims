<style>
  
</style>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>
<body>
    <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

    <script>
        var xValues = <?php $q=select * from product_tbl?>;
        var yValues = [7,8,8,9,9,9,10,11,14,14,15];

        new Chart("myChart", 
        {
          type: "line",
          data: 
          {
            labels: xValues,
            datasets: [{
              fill: false,
              lineTension: 0,
              backgroundColor: "rgba(0,0,255,1.0)",
              borderColor: "rgba(0,0,255,0.1)",
              data: yValues
          }]
            },
      options: {
        legend: {display: false},
        scales: {
          yAxes: [{ticks: {min: 6, max:16}}],
      }
  }
});
</script>
</body>
</html>