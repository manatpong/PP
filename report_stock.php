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
            <strong style="font-size: 36px;">Report: Stock</strong>
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
                                   <td>Number of Materials Withdrawal</td>
                                   <td><input id="mat-id" type="text" class="form-control" value="14" style="width: 60%;"></td>
                               </tr>
                               <tr>
                                   <td>Number of Goods Receipt</td>
                                   <td><input id="mat-id" type="text" class="form-control" value="20" style="width: 60%;"></td>
                               </tr>
                           </tbody>
                       </table>
                    </div>
                </div>

                <div class="row-fluid BOM bg-white">
                  <div class="col-12 line-doc">
                        <h4>Materials Used</h4>
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
                              { x: 0, y: 12000 , name: "MAT10001"},
                              { x: 1, y: 14000 , name: "MAT10002"},
                              { x: 2, y: 13000 , name: "MAT10003"},
                              { x: 3, y: 20000 , name: "MAT10004"},
                              { x: 4, y: 16000 , name: "MAT10005"},
                              { x: 5, y: 18000 , name: "MAT10006"},
                              { x: 6, y: 21000 , name: "MAT10007"}
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
                          Pie_chart();
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
                                   <th>Quantity In</th>
                                   <th>Quantity Out</th>
                                   <th>Unit</th>
                               </tr>
                               <tr>
                                   <td>1</td>
                                   <td>MAT10001</td>
                                   <td>น้ำดื่ม ปริมาณ 330 มิลลิลิตร  </td>
                                   <td>25,000</td>
                                   <td>23,000</td>
                                   <td>EA</td>
                               </tr>
                               <tr>
                                   <td>2</td>
                                   <td>MAT10002</td>
                                   <td>น้ำดื่ม ปริมาณ 600 มิลลิลิตร  </td>
                                   <td>25,000</td>
                                   <td>22,000</td>
                                   <td>EA</td>
                               </tr>
                               <tr>
                                   <td>3</td>
                                   <td>MAT10003</td>
                                   <td>น้ำดื่ม ปริมาณ 1.5 ลิตร  </td>
                                   <td>25,000</td>
                                   <td>20,000</td>
                                   <td>EA</td>
                               </tr>
                               <tr>
                                   <td>4</td>
                                   <td>MAT10004</td>
                                   <td>น้ำดื่ม ปริมาณ 6 ลิตร  </td>
                                   <td>30,000</span></td>
                                   <td>20,000</td>
                                   <td>EA</td>
                               </tr>
                               <tr>
                                   <td>5</td>
                                   <td>MAT10005</td>
                                   <td>น้ำดื่ม ปริมาณ 330 มิลลิลิตร:  </td>
                                   <td>30,000</td>
                                   <td>16,000</td>
                                   <td>EA</td>
                               </tr>
                               <tr>
                                   <td>6</td>
                                   <td>MAT10006</td>
                                   <td>น้ำดื่ม ปริมาณ 330 มิลลิลิตร:  </td>
                                   <td>30,000</td>
                                   <td>18,000</td>
                                   <td>EA</td>
                               </tr>
                               <tr>
                                   <td>7</td>
                                   <td>MAT10007</td>
                                   <td>น้ำดื่ม ปริมาณ 330 มิลลิลิตร:  </td>
                                   <td>30,000</td>
                                   <td>21,000</td>
                                   <td>EA</td>
                               </tr>
                               <tr>
                                   <th>Total</th>
                                   <td></td>
                                   <td></td>
                                   <th><span style="color: #28B463">195,000</th>
                                   <th><span style="color: #28B463">140,000</th>
                                   <th>EA</th>
                               </tr>
                             </tbody>
                       </table>
                      </div>
                    </div>
                    


                </div>
                <div class="row-fluid BOM bg-white">
                    <div class="col-12 line-doc">
                        <h4>Inventory Utilization Average</h4>
                    </div>
                    <div id="chartContainer2"></div>

                      <script>
                        function Pie_chart() {

                        var chart = new CanvasJS.Chart("chartContainer2", {
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
                              { y: 32, name: "Zone A", unit:9600 },
                              { y: 20, name: "Zone B", unit:6000},
                              { y: 28, name: "Zone C", unit:8400},
                              { y: 20, name: "Zone D", exploded: true, unit:6000},
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


<?php 
    FOOTER();
    foot(); 
    ?>
</body>

</html>
