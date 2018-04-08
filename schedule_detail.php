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
            <strong style="font-size: 36px;">Planed Order: Display</strong>
                <div class="row-fluid BOM bg-white">
                    <div class="col-12 line-doc">
                        <h4>Header</h4>
                    </div>
                    <div class="col-12">
                       <table class="table">
                           <tbody>
                               <tr>
                                   <td>Production Sch.</td>
                                   <td><input id="mat-id" type="text" class="form-control" value="002" style="width: 60%;" disabled></td>
                               </tr>
                               <tr>
                                   <td>Description</td>
                                   <td><input id="mat-id" type="text" class="form-control" value="Production Scheduler FG30001" style="width: 60%;" disabled></td>
                               </tr>
                               <tr>
                                   <td>Document Date</td>
                                   <td><input id="mat-id" type="text" class="form-control" value="08/04/2018" style="width: 60%;" disabled></td>
                               </tr>
                           </tbody>
                       </table>
                    </div>
                </div>

                <div class="row-fluid BOM bg-white">
                    <div class="col-12 line-doc">
                        <h4>Detail</h4>
                    </div>
                    <div class="col-12">
                       <table class="table text-center">
                           <tbody>
                               <tr>
                                   <td>Bill of Materials</td>
                                   <td><input id="mat-id" type="text" class="form-control" value="FG30001" style="width: 60%;" disabled></td>
                               </tr>
                               <tr>
                                   <td>Quantity</td>
                                   <td><input id="mat-id" type="number" class="form-control" value="1000" style="width: 60%;" disabled></td>
                               </tr>
                               <tr>
                                   <td>Routing</td>
                                   <td><input id="mat-id" type="text" class="form-control" value="FG30001" style="width: 60%;" disabled></td>
                               </tr>
                               <tr>
                                   <td>Order Date</td>
                                   <td><input id="mat-id" type="text" class="form-control" value="03/04/2018"  style="width: 60%;" disabled></td>
                                   <td>Due Date</td>
                                   <td><input id="mat-id" type="text" class="form-control" value="16/04/2018" style="width: 60%;" disabled></td>
                               </tr>
                           </tbody>
                       </table>
                    </div>
                    <div class="row"><div style="margin: auto; margin-bottom: 12px;"><a href="#" class="btn btn-primary">Save</a> &nbsp<a href="schedule.php" onclick="confirm('Do you want to commit.')" class="btn btn-success" >Commit</a></div></div>
                </div>
            </div>
        </div>


<?php 
    FOOTER();
    foot(); 
    ?>
</body>

</html>
