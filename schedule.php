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
            <strong style="font-size: 36px;">Planed Order</strong>

                <div class="row-fluid BOM bg-white">
                    <div class="col-12 line-doc">
                        <h4>Overview</h4>
                    </div>
                    <div class="col-12">
                       <table class="table text-center">
                           <tbody>
                               <tr>
                                  <th>Planed Order</th>
                                   <th>Description</th>
                                   <th>Order Date</th>
                                   <th>Due Date</th>
                                   <th>Status</th>
                                   <th>View</th>
                                   <th>Action</th>
                               </tr>
                               <tr>
                                    <td>001</td>
                                   <td>Production Scheduler 1</td>
                                   <td>04/03/2018</td>
                                   <td>11/03/2018</td>
                                   <td style="color: #28B463">Committed</td>
                                   <td><a class="btn btn-info" href="schedule_detail.php">Detail</a></td>
                                   <td></td>
                               </tr>
                               <tr>
                                    <td>002</td>
                                   <td>Production Scheduler 2</td>
                                   <td>06/03/2018</td>
                                   <td>31/03/2018</td>
                                   <td style="color: orange">Uncommitted</td>
                                   <td><a class="btn btn-info" href="schedule_detail.php">Detail</a></td>
                                   <td><a class="btn btn-success" href="schedule_edit.php">Edit</a></td>
                               </tr>
                               <tr>
                                    <td>003</td>
                                   <td>Production Group</td>
                                   <td>07/03/2018</td>
                                   <td>19/03/2018</td>
                                   <td style="color: #28B463">Committed</td>
                                   <td><a class="btn btn-info" href="schedule_detail.php">Detail</a></td>
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
