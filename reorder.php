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
                        <h4>Inventory Usage Overview</h4>
                    </div>

                    <div class="col-12">
                      <div class="col-12 text-right">
                        <h6>Used: 28000 unit</h6>
                        <h6>Valid: 6000 unit</h6>
                        <h6>Total: 30000 unit</h6>
                      </div>
                      <div id="chartContainer"></div>

                      <script>
                        window.onload = function () {

                        var chart = new CanvasJS.Chart("chartContainer", {
                          exportEnabled: true,
                          animationEnabled: true,
                          legend:{
                            cursor: "pointer",
                            itemclick: explodePie
                          },
                          data: [{
                            type: "pie",
                            showInLegend: true,
                            toolTipContent: "{name}: <strong>{y}%</strong>",
                            indexLabel: "{name} - {y}%",
                            dataPoints: [
                              { y: 80, name: "Finished Good" },
                              { y: 20, name: "Assembly", exploded: true }
                            ]
                          }]
                        });
                        chart.render();
                        }

                        function explodePie (e) {
                          if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
                            e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
                          } else {
                            e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
                          }
                          e.chart.render();

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
