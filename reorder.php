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
                        <h4>Reorder Point</h4>
                        <table class="table">
                           <tbody>
                               <tr>
                                   <td class="td-mat">
                                      <select class="form-control" style="text-align: center;">
                                        <option>MAT10001: ขวดน้ำดื่ม ปริมาณ 330 มิลลิลิตร</option>
                                        <option>MAT10002: ขวดน้ำดื่ม ปริมาณ 600 มิลลิลิตร</option>
                                        <option>MAT10003: ขวดน้ำดื่ม ปริมาณ 1.5 ลิตร</option>
                                        <option>MAT10004: ขวดน้ำดื่ม ปริมาณ 6 ลิตร</option>
                                        <option>MAT10005: ฝาขวดเล็ก 7 เซ็นติเมตร</option>
                                        <option>MAT10006: ฝาขวดใหญ่ 10 เซ็นติเมตร</option>
                                        <option>MAT10007: ฉลาก</option>
                                    </select>
                                   </td>
                                   <td><button type="button" onclick="CLICK()" class="btn btn-primary">Show Result</button></td>
                               </tr>
                           </tbody>
                       </table>
                    </div>

                    <div class="col-12 text-center" id="chart-object">
                      
                      <div id="chartContainer" ></div>
                      <script>
                        function CHART(){

                        var chart = new CanvasJS.Chart("chartContainer", {
                          animationEnabled: true,
                          theme: "light2",
                          axisX: {
                            valueFormatString: "M"
                          },
                          axisY: {
                            //prefix: "N",
                            //labelFormatter: addSymbols
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
                            type: "line",
                            name: "QTY",
                            showInLegend: false,
                            xValueFormatString: "Reorder Poin't'",
                            yValueFormatString: "#,##0",
                            dataPoints: [
                              { x: new Date(2016, 0), y: 2200 },
                              { x: new Date(2016, 1), y: 1800 },
                              { x: new Date(2016, 2), y: 1400 },
                              { x: new Date(2016, 1, ), y: 1800, indexLabel: "Current QTY", markerColor: "red", markerType: "triangle", indexLabelFontColor: "green" },
                              { x: new Date(2016, 3), y: 1000, indexLabel: "Reorder Point", markerColor: "red", markerType: "triangle", indexLabelFontColor: "orange" },
                              { x: new Date(2016, 3), y: 1000  },
                              { x: new Date(2016, 4), y: 600 },
                              { x: new Date(2016, 5, 1), y: 200, indexLabel: "Goods Receipt", markerColor: "red", markerType: "triangle", indexLabelFontColor: "orange" },
                              { x: new Date(2016, 5, 2), y: 2200 },
                              { x: new Date(2016, 6, 1), y: 1800 },
                              { x: new Date(2016, 7), y: 1400 },
                              { x: new Date(2016, 8), y: 1000 },
                              { x: new Date(2016, 9), y:  600 },
                              { x: new Date(2016, 10), y: 200 },
                              { x: new Date(2016, 10), y: 2200 },
                              { x: new Date(2016, 11), y: 1800 },
                              { x: new Date(2016, 12), y: 1400 }
                            ]
                          }, 
                          {
                            type: "line",
                            name: "Safety Stock",
                            showInLegend: false,
                            yValueFormatString: "#,##0",
                            dataPoints: [
                              { x: new Date(2016, 0), y: 200 },
                              { x: new Date(2016, 11, 31), y: 200 }
                            ]
                          }, 
                          {
                            type: "line",
                            name: "Order Date",
                            showInLegend: false,
                            yValueFormatString: "#,##0",
                            dataPoints: [
                              { x: new Date(2016, 0), y: 1000 },
                              { x: new Date(2016, 11, 31), y: 1000 }
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
                      <hr>
                      <div class="col-12 text-left">
                        <h6>Current Qty: 1800 unit</h6>
                        <h6>Reorder Point: <span style="color: orange">1000 unit</h6>
                        <h6>Different: 800 unit</h6>
                        <h6>Safty Stock:  200 unit</h6>
                        <h6>Lead time: 2 days</h6>
                        <h6>Material Status:<span style="color: #28B463"> Available</span></h6>
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
