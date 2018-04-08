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
                        <strong style="font-size: 30px;">Inventory Usage: Overview</strong>
                    </div>

                    <div class="col-12">
                      <div class="col-12 text-right">
                        <a href="inven_detail_used.php"><h6>Used: 24000 sqm.</h6></a>
                        <a href="inven_detail_space.php"><h6>Space: 6000 sqm.</h6></a>
                        <h6>Total Area: 30000 sqm.</h6>
                      </div>
                      <div id="chartContainer"></div>

                      <script>
                        window.onload = function () {

                        var chart = new CanvasJS.Chart("chartContainer", {
                          exportEnabled: true,
                          animationEnabled: true,
                          legend:{
                            cursor: "pointer",
                            itemclick: "<a href='inventory.php'>a</a>" //explodePie
                          },
                          data: [{
                            type: "pie",
                            showInLegend: true,
                            toolTipContent: "{name}: <strong>{y}%</strong>",
                            indexLabel: "{name} - {y}%",
                            dataPoints: [
                              { y: 80, name: "Used" },
                              { y: 20, name: "Space", exploded: true }
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
