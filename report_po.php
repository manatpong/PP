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
            <strong style="font-size: 36px;">Report: Production Order</strong>
                <div class="row-fluid BOM bg-white">
                    <div class="col-12 line-doc">
                        <h4>Header</h4>
                    </div>
                    <div class="col-12">
                       <table class="table">
                           <tbody>
                               <tr>
                                   <td>Period</td>
                                   <td><input id="mat-id" type="text" class="form-control" value="April 2018" style="width: 60%;"></td>
                               </tr>
                               <tr>
                                   <td>Number of Production Orders</td>
                                   <td><input id="mat-id" type="text" class="form-control" value="14" style="width: 60%;"></td>
                               </tr>
                           </tbody>
                       </table>
                    </div>
                </div>

                <div class="row-fluid BOM bg-white">
                  <div class="col-12 line-doc">
                        <h4>Production Sumary</h4>
                    </div>
                    <div class="col-12 text-center" id="chart-object">
                      <div class="col-12 text-right"></div>
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
                            prefix: "",
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
                            name: "Quantity",
                            showInLegend: true,
                            indexLabel: "{name}",
                            // xValueFormatString: "MMMM YYYY",
                            yValueFormatString: "#,##0 Unit",
                            dataPoints: [
                              { x: 0, y: 20000 , name: "FG30001"},
                              { x: 1, y: 30000 , name: "FG30002"},
                              { x: 2, y: 25000 , name: "FG30003"},
                              { x: 3, y: 70000 , name: "FG30004"},
                              { x: 4, y: 50000 , name: "FG30005"}
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
                        window.onload = function (){
                          show_chart();
                          CHART();
                        }
                      </script>
                      <hr>
                      <div class="col-12 text-left">
                        <table class="table text-center">
                           <tbody>
                               <tr>
                                   <th>Item</th>
                                   <th>Material</th>
                                   <th>Description</th>
                                   <th>Quantity</th>
                                   <th>Unit</th>
                               </tr>
                               <tr>
                                   <td>1</td>
                                   <td>FG30001</td>
                                   <td>น้ำดื่ม ปริมาณ 330 มิลลิลิตร  </td>
                                   <td>20,000</td>
                                   <td>EA</td>
                               </tr>
                               <tr>
                                   <td>2</td>
                                   <td>FG30002</td>
                                   <td>น้ำดื่ม ปริมาณ 600 มิลลิลิตร  </td>
                                   <td>30,000</td>
                                   <td>EA</td>
                               </tr>
                               <tr>
                                   <td>3</td>
                                   <td>FG30003</td>
                                   <td>น้ำดื่ม ปริมาณ 1.5 ลิตร  </td>
                                   <td>25,000</td>
                                   <td>EA</td>
                               </tr>
                               <tr>
                                   <td>4</td>
                                   <td>FG30004</td>
                                   <td>น้ำดื่ม ปริมาณ 6 ลิตร  </td>
                                   <td><span style="color: orange"> 70,000</span></td>
                                   <td>EA</td>
                               </tr>
                               <tr>
                                   <td>5</td>
                                   <td>FG30005</td>
                                   <td>น้ำดื่ม ปริมาณ 330 มิลลิลิตร:  </td>
                                   <td>50,000</td>
                                   <td>EA</td>
                               </tr>
                             </tbody>
                       </table>
                       <h6 class="text-right">Total Quantity:<span style="color: #28B463"> 195,000 EA</span></h6>
                      </div>
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
