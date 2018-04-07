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
                                   <td><button type="button" onclick="show_chart()" class="btn btn-primary">Go</button></td>
                               </tr>
                           </tbody>
                       </table>
                    </div>

                    <div class="col-12" id="chart-object">
                      <canvas id="mixed-chart" class"form-control"></canvas>
                      <script type="text/javascript">
                        new Chart(document.getElementById("mixed-chart"), {
                        type: 'bar',
                        data: {
                          labels: ["Jan.", "Feb.", "Mar.", "Apr.", "May", "Jun.", "Jul.", "Aug.", "Sep.", "Oct.", "Nov.", "Dec."],
                          datasets: [{
                              label: "Demand",
                              type: "line",
                              borderColor: "#8e5ea2",
                              data: [300, 400, 500, 600, 200, 100, 700, 600, 900, 1064, 222, 100],
                              fill: false
                            }, {
                              label: "Europe",
                              type: "bar",
                              backgroundColor: "rgba(0,0,0,0.2)",
                              data: [300, 400, 500, 600, 200, 100, 700, 600, 900, 1064, 222, 100],
                            }
                          ]
                        },
                        options: {
                          title: {
                            display: true,
                            text: 'Forecast date to date'
                          },
                          legend: { display: false }
                        }
                    });
                      </script>

                      <script>
                        function show_chart() {
                            var x = document.getElementById("chart-object");
                                x.style.display = "block";
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
