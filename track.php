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
            <strong style="font-size: 36px;">Order Tracking</strong>

                <div class="row-fluid BOM bg-white">
                    <div class="col-12 line-doc">
                        <h4>Overview</h4>
                    </div>
                    <div class="col-12">
                       <table class="table text-center">
                           <tbody>
                               <tr>
                                  <th>Order</th>
                                   <th>Description</th>
                                   <th>Order Date</th>
                                   <th>Due Date</th>
                                   <th>Time Left</th>
                                   <th>Status</th>
                                   <th>Action</th>
                               </tr>
                               <tr>
                                    <td>001</td>
                                   <td>Production Scheduler FG30001</td>
                                   <td>04/03/2018</td>
                                   <td>11/03/2018</td>
                                   <td>-</td>
                                   <th style="color: #566573 ">Did not Start</th>
                                   <td></td>
                               </tr>
                               <tr>
                                    <td>002</td>
                                   <td>Production Scheduler FG30004</td>
                                   <td>06/03/2018</td>
                                   <td>31/03/2018</td>
                                   <td>22</td>
                                   <th style="color: orange">In Process</th>
                                   <td></td>
                               </tr>
                               <tr>
                                    <td>003</td>
                                   <td>Production Group</td>
                                   <td>03/03/2018</td>
                                   <td>09/03/2018</td>
                                   <td>-</td>
                                   <th style="color: #28B463">Success</th>
                                   <td></td>
                               </tr>
                               <tr>
                                    <td>004</td>
                                   <td>Production Group 2</td>
                                   <td>01/03/2018</td>
                                   <td>09/03/2018</td>
                                   <td>-</td>
                                   <th style="color: #2E86C1">Goods Receipt</th>
                                   <td></td>
                               </tr>
                               <tr>
                                    <td>005</td>
                                   <td>Production Group</td>
                                   <td>05/03/2018</td>
                                   <td>09/03/2018</td>
                                   <td>2</td>
                                   <th style="color: orange">In Process</th>
                                   <td></td>
                               </tr>
                           </tbody>
                       </table>
                    </div>
                    <div class="row"><a href="schedule_new.php" class="btn btn-primary" style="margin: auto; margin-bottom: 12px;">New Entry</a></div>
                </div>
            </div>
        </div>


<?php 
    FOOTER();
    foot(); 
    ?>
</body>

</html>
