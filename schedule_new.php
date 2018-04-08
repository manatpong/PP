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
            <strong style="font-size: 36px;">Planed Order: New Entry</strong>
                <div class="row-fluid BOM bg-white">
                    <div class="col-12 line-doc">
                        <h4>Header</h4>
                    </div>
                    <div class="col-12">
                       <table class="table">
                           <tbody>
                               <tr>
                                   <td>Production Sch.</td>
                                   <td><input id="mat-id" type="text" class="form-control" name="" style="width: 60%;"></td>
                               </tr>
                               <tr>
                                   <td>Description</td>
                                   <td><input id="mat-id" type="text" class="form-control" name="" style="width: 60%;"></td>
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
                                   <td><input id="mat-id" type="text" class="form-control" name="" style="width: 60%;"></td>
                               </tr>
                               <tr>
                                   <td>Quantity</td>
                                   <td><input id="mat-id" type="number" class="form-control" name="" style="width: 60%;"></td>
                               </tr>
                               <tr>
                                   <td>Routing</td>
                                   <td><input id="mat-id" type="text" class="form-control" name="" style="width: 60%;"></td>
                               </tr>
                               <tr>
                                   <td>Order Date</td>
                                   <td><input id="mat-id" type="date" class="form-control" name="" style="width: 60%;"></td>
                                   <td>Due Date</td>
                                   <td><input id="mat-id" type="date" class="form-control" name="" style="width: 60%;"></td>
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
