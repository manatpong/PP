<?php require_once 'includes/config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php head(); ?>
</head>
<body>
    <?php sidebar(); ?>
    <div class="main-panel">
       <div class="content-wrapper">
           <div class="content container-fluid">
                <div class="row-fluid BOM bg-white">
                    <div class="col-12 line-doc">
                        <h4>Forecast</h4>
                        <table class="table">
                           <tbody>
                               <tr>
                                   <td>
                                      <select class="form-control mat">
                                        <option selected>Material</option>
                                        <option>bottle</option>
                                        <option>sth</option>
                                        <option>sth</option>
                                      </select>
                                   </td>
                                   <td>Sale history: </td>
                                   <td><input type="date" class="form-control text-center" value="<?php echo date('Y-m-d'); ?>"> </td>
                                    <td>to</td>
                                   <td><input type="date" class="form-control text-center" value="<?php echo date('Y-m-d'); ?>"> </td>
                                   <td><button type="button" onclick="CLICK()" class="btn btn-primary">Go</button></td>
                               </tr>
                           </tbody>
                       </table>
                    </div>

                    <div class="col-12 text-center" id="chart-object">
                      <div class="col-12 text-right"><h6>Next month: 2000 unit</h6></div>
                      <div id="chartContainer" ></div>
                      <script>
                        function CHART() {

                        var chart = new CanvasJS.Chart("chartContainer", {
                          animationEnabled: true,
                          theme: "light2",
                          axisX: {
                            valueFormatString: "MMM"
                          },
                          axisY: {
                            prefix: "$",
                            labelFormatter: addSymbols
                          },
                          toolTip: {
                            shared: true
                          },
                          legend: {
                            cursor: "pointer",
                            itemclick: toggleDataSeries
                          },
                          data: [
                          {
                            type: "column",
                            name: "Demand",
                            showInLegend: true,
                            xValueFormatString: "MMMM YYYY",
                            yValueFormatString: "$#,##0",
                            dataPoints: [
                              { x: new Date(2016, 0), y: 20000 },
                              { x: new Date(2016, 1), y: 30000 },
                              { x: new Date(2016, 2), y: 25000 },
                              { x: new Date(2016, 3), y: 70000, indexLabel: "Highest" },
                              { x: new Date(2016, 4), y: 50000 },
                              { x: new Date(2016, 5), y: 35000 },
                              { x: new Date(2016, 6), y: 30000 },
                              { x: new Date(2016, 7), y: 43000 },
                              { x: new Date(2016, 8), y: 35000 },
                              { x: new Date(2016, 9), y:  30000},
                              { x: new Date(2016, 10), y: 40000 },
                              { x: new Date(2016, 11), y: 50000 }
                            ]
                          }, 
                          {
                            type: "line",
                            name: "Expected Sales",
                            showInLegend: false,
                            yValueFormatString: "$#,##0",
                            dataPoints: [
                              { x: new Date(2016, 0), y: 20000 },
                              { x: new Date(2016, 1), y: 30000 },
                              { x: new Date(2016, 2), y: 25000 },
                              { x: new Date(2016, 3), y: 70000 },
                              { x: new Date(2016, 4), y: 50000 },
                              { x: new Date(2016, 5), y: 35000 },
                              { x: new Date(2016, 6), y: 30000 },
                              { x: new Date(2016, 7), y: 43000 },
                              { x: new Date(2016, 8), y: 35000 },
                              { x: new Date(2016, 9), y:  30000},
                              { x: new Date(2016, 10), y: 40000 },
                              { x: new Date(2016, 11), y: 50000 }
                            ]
                          }]
                        });
                        chart.render();

                        function addSymbols(e) {
                          var suffixes = ["", "K", "M", "B"];
                          var order = Math.max(Math.floor(Math.log(e.value) / Math.log(1000)), 0);

                          if(order > suffixes.length - 1)                 
                            order = suffixes.length - 1;

                          var suffix = suffixes[order];      
                          return CanvasJS.formatNumber(e.value / Math.pow(1000, order)) + suffix;
                        }

                        function toggleDataSeries(e) {
                          if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                            e.dataSeries.visible = false;
                          } else {
                            e.dataSeries.visible = true;
                          }
                          e.chart.render();
                        }

                        }
                        </script>

                      <script>
                        function show_chart() {
                            var x = document.getElementById("chart-object");
                                x.style.display = "block";
                        }
                        function CLICK(){
                          show_chart();
                          CHART();
                        }
                      </script>
                    </div>
              
                </div>

            </div>
        </div>


<?php 
    FOOTER();
    foot(); 
    ?>
</body>

</html>
