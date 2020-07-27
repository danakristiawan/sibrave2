<script>
  $(function() {
    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChart = new Chart(barChartCanvas)
    var areaChartData = {
      labels: [
        <?php
        foreach ($monitor as $s) : ?> '<?= $s['id']; ?>',
        <?php endforeach; ?>
      ],
      datasets: [{
        label: 'Target',
        fillColor: '#29A745',
        strokeColor: '#29A745',
        pointColor: '#29A745',
        pointStrokeColor: '#c1c7d1',
        pointHighlightFill: '#fff',
        pointHighlightStroke: 'rgba(220,220,220,1)',
        data: [
          <?php
          foreach ($monitor as $s) : ?> '<?= $s['target']; ?>',
          <?php endforeach; ?>
        ]
      }, {
        label: 'Capaian',
        fillColor: '#D2D6DE',
        strokeColor: '#D2D6DE',
        pointColor: '#D2D6DE',
        pointStrokeColor: '#D2D6DE',
        pointHighlightFill: '#D2D6DE',
        pointHighlightStroke: 'rgba(220,220,220,1)',
        data: [
          <?php foreach ($monitor as $s) : ?> '<?= $s['capaian']; ?>',
          <?php endforeach; ?>
        ]
      }]
    }
    var barChartData = areaChartData
    barChartData.datasets[1].fillColor = '#00C0EF'
    barChartData.datasets[1].strokeColor = '#00C0EF'
    barChartData.datasets[1].pointColor = '#00C0EF'
    var barChartOptions = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: true,
      //String - Colour of the grid lines
      scaleGridLineColor: 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - If there is a stroke on each bar
      barShowStroke: true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth: 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing: 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing: 1,
      //String - A legend template
      legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive: true,
      maintainAspectRatio: true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)
  })
</script>
</body>

</html>