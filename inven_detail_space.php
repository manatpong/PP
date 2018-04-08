<?php require_once 'includes/config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php head(); ?>
</head>
<body>
    <?php sidebar(); ?>
    <div class="main-panel">
       <?php //NAV_Bar(); ?>

       <div class="content-wrapper">
           <div class="content container">
            <strong style="font-size: 30px;">Inventory Usage: Space Detail</strong>
            <div class="row-fluid BOM bg-white" style="margin-bottom: 0px">
                    <div class="col-12 line-doc">
                        <h4>Space each Inventory Area</h4>
                    </div>
                    <!-- <div class="col-12">
                       <table class="table">
                           <tbody>
                               <tr>
                                   <td style="width: 180px">Zone Area </td>
                                   <th style="width: 200px"><div>
                                    <select class="form-control" style="width: 80%">
                                     <option>A</option>
                                     <option>B</option>
                                     <option>C</option>
                                     <option>D</option>
                                   </select>
                                   
                                 </th>
                                 <td><button type="button" onclick="CLICK()" class="btn btn-primary">View</button></div></td>
                               </tr>
                           </tbody>
                       </table>
                    </div> -->
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
                            indexLabel: "{name} - {y}%: {unit} sqm.",
                            dataPoints: [
                              { y: 20, name: "Zone A", unit:1200 },
                              { y: 36.67, name: "Zone B", unit:2200},
                              { y: 30, name: "Zone C", unit:1800},
                              { y: 13.33, name: "Zone D", exploded: true, unit:800},
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


<?php 
    FOOTER();
    foot(); 
    ?>
</body>

</html>
