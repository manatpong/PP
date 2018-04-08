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
            <strong style="font-size: 36px;">Production Order: New Entry</strong>
                <div class="row-fluid BOM bg-white">
                    <div class="col-12 line-doc">
                        <h4>Header</h4>
                    </div>
                    <div class="col-12">
                       <table class="table">
                           <tbody>
                               <tr>
                                   <td>Planed Order</td>
                                   <td><input id="mat-id" type="text" class="form-control" value="004" style="width: 60%;"></td>
                               </tr>
                               <tr>
                                   <td>Description</td>
                                   <td><input id="mat-id" type="text" class="form-control" value="Production Scheduler FG30001" style="width: 60%;"></td>
                               </tr>
                               <tr>
                                   <td>Document Date</td>
                                   <td><input id="mat-id" type="text" class="form-control" value="08/04/2018" style="width: 60%;" disabled></td>
                               </tr>
                               <tr>
                                   <td>Action</td>
                                   <td><div class="form-check">
                                      <input class="form-check-input" type="checkbox" checked value="" id="defaultCheck1">
                                      <label class="form-check-label" for="defaultCheck1" >
                                        Release PO
                                      </label>
                                    </div></td>
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
                                   <td><input id="mat-id" type="text" class="form-control" value="FG30001" style="width: 60%;"></td>
                               </tr>
                               <tr>
                                   <td>Quantity</td>
                                   <td><input id="mat-id" type="number" class="form-control" value="1000" style="width: 60%;"></td>
                               </tr>
                               <tr>
                                   <td>Routing</td>
                                   <td><input id="mat-id" type="text" class="form-control" value="FG30001" style="width: 60%;"></td>
                               </tr>
                               <tr>
                                   <td>Order Date</td>
                                   <td><input id="mat-id" type="text" class="form-control" value="03/04/2018"  style="width: 60%;"></td>
                                   <td>Due Date</td>
                                   <td><input id="mat-id" type="text" class="form-control" value="16/04/2018" style="width: 60%;"></td>
                               </tr>
                           </tbody>
                       </table>
                    </div>
                    <div class="row"><a href="po_mat.php" class="btn btn-primary" style="margin: auto; margin-bottom: 12px;">Materials</a></div>
                </div>
            </div>
        </div>


<?php 
    FOOTER();
    foot(); 
    ?>
</body>

</html>
