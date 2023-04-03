

<?php
                //OVERFLIGHT DATA  
                $dataPoints3 = array();
                foreach ($ovfs as $row) {
                    $dataPoints3[] = array("label" => $row['YR'], "y" => $row['OVERFLY']);
                }

                //INTERNATIONAL ARRIVALS
                $dataPoints4 = array();
                foreach ($IntArrivals as $row) {
                    $dataPoints4[] = array("label" => $row['YR'], "y" => $row['ARRIVAL']);
                }

                //INTERNATIONAL DEPARTURE

                $dataPoints5 = array();
                foreach ($IntDeparts as $row) {
                    $dataPoints5[] = array("label" => $row['YR'], "y" => $row['DEPART']);
                }

                // print_r($dataPoints5);
                // exit;
                ?>

           
<html>
<head>
  <title>Bar Chart Example</title>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    //OVERFLIGHT DATA  
    var dataPoints3 = <?php echo json_encode($ovfs); ?>;

    //INTERNATIONAL ARRIVALS
    var dataPoints4 = <?php echo json_encode($IntArrivals); ?>;

    //INTERNATIONAL DEPARTURE
    var dataPoints5 = <?php echo json_encode($IntDeparts); ?>;

 

    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
  var data = [['Year', 'Overflight', 'Int. Arrivals', 'Int. Departs']];
  for (var i = 0; i < dataPoints3.length; i++) {
    var year = dataPoints3[i]['YR'];
    var overflight = parseInt(dataPoints3[i]['OVERFLY']);
    var arrivals = parseInt(dataPoints4[i]['ARRIVAL']);
    var departs = parseInt(dataPoints5[i]['DEPART']);
    data.push([year, overflight, arrivals, departs]);
  }
  var dataTable = google.visualization.arrayToDataTable(data);

    //   var data = google.visualization.arrayToDataTable([
    //     ['Year', 'Overflight', 'Int. Arrivals', 'Int. Departs'],
    //     [dataPoints3[0]['YR'], parseInt(dataPoints3[0]['OVERFLY']), parseInt(dataPoints4[0]['ARRIVAL']), parseInt(dataPoints5[0]['DEPART'])],
    //     [dataPoints3[1]['YR'], parseInt(dataPoints3[1]['OVERFLY']), parseInt(dataPoints4[1]['ARRIVAL']), parseInt(dataPoints5[1]['DEPART'])],
    //     [dataPoints3[2]['YR'], parseInt(dataPoints3[2]['OVERFLY']), parseInt(dataPoints4[2]['ARRIVAL']), parseInt(dataPoints5[2]['DEPART'])],
    //     [dataPoints3[3]['YR'], parseInt(dataPoints3[3]['OVERFLY']), parseInt(dataPoints4[3]['ARRIVAL']), parseInt(dataPoints5[3]['DEPART'])],
    //     [dataPoints3[4]['YR'], parseInt(dataPoints3[4]['OVERFLY']), parseInt(dataPoints4[4]['ARRIVAL']), parseInt(dataPoints5[4]['DEPART'])],
    //     [dataPoints3[5]['YR'], parseInt(dataPoints3[5]['OVERFLY']), parseInt(dataPoints4[5]['ARRIVAL']), parseInt(dataPoints5[5]['DEPART'])]
    //   ]);

      var options = {
        chart: {
          title: '',
          subtitle: 'Overflight, Int. Arrivals, and Int. Departs: 2014-2017',
        },
        legend: { position: 'top' },
    orientation: 'horizontal'
        
      };

       var chart = new google.charts.Bar(document.getElementById('chart_div'));


    chart.draw(dataTable, google.charts.Bar.convertOptions(options));
    }
  </script>
</head>
<body>
  <div id="chart_div" style="width: 900px; height: 500px;"></div>
</body>
</html>









<!-- <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses', 'Profit'],
          ['2014', 1000, 400, 200],
          ['2015', 1170, 460, 250],
          ['2016', 660, 1120, 300],
          ['2017', 1030, 540, 350]
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="barchart_material" style="width: 900px; height: 500px;"></div>
  </body>
</html> -->


  
    <div id="chartContainer1" style="height: 370px; width: 100%;"></div>

    <div class="card border-left-3 border-left-primary card-2by1">
      <div class="card-body">
        <div class="col-md-12">
          <h4>Overfly Movements across Tanzania AirSpace</h4>
          <div class="table-responsive">
            <table class="table table-striped table-bordered">
              <table-header class="">
                <tr>
                  <th scope="col myMwk">Year</th>
                  <th scope="col">January</th>
                  <th scope="col">February</th>
                  <th scope="col">March</th>
                  <th scope="col">April</th>
                  <th scope="col">May</th>
                  <th scope="col">June</th>
                  <th scope="col">July</th>
                  <th scope="col">August</th>
                  <th scope="col">September</th>
                  <th scope="col">October</th>
                  <th scope="col">November</th>
                  <th scope="col">December</th>
                </tr>
              </table-header>
              <tbody>
                <?php foreach ($flightDataByYear as $year => $flightData) : ?>

                  <tr>

                                    <td><?= $year ?></td>
                                    <?php for ($month = 1; $month <= 12; $month++) : ?>
                                        <?php
                                        $flightCount = "0";
                                        foreach ($flightData as $row) {
                                            if ($row['MWEZI'] == $month) {
                                                $flightCount = $row['OVERFLY'];
                                                break;
                                            }
                                        }
                                        ?>
                                        <td align="right"><?= number_format($flightCount); ?>
                                        <?php endfor ?>
                                </tr>
                            <?php endforeach ?>


                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
</div>