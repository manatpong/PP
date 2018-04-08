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
            <strong style="font-size: 36px;">Vendor: New Entry</strong>
                <div class="row-fluid BOM bg-white">
                    <div class="col-12 line-doc">
                        <h4>Vendor</h4>
                    </div>
                    <div class="col-12">
                       <table class="table">
                           <tbody>
                               <tr>
                                   <td>Name</td>
                                   <td><input id="mat-id" type="text" class="form-control" name="" style="width: 60%;"></td>
                               </tr>
                               <tr>
                                   <td>Address</td>
                                   <td><input id="mat-id" type="text" class="form-control" name="" style="width: 60%;"></td>
                               </tr>
                               <tr>
                                   <td>Telephone</td>
                                   <td><input id="mat-id" type="text" class="form-control" name="" style="width: 60%;"></td>
                               </tr>
                               <tr>
                                   <td>Fax</td>
                                   <td><input id="mat-id" type="text" class="form-control" name="" style="width: 60%;"></td>
                               </tr>
                               <tr>
                                   <td>Website</td>
                                   <td><input id="mat-id" type="text" class="form-control" name="" style="width: 60%;"></td>
                               </tr>
                           </tbody>
                       </table>
                    </div>
                    <div class="row"><a href="vendor.php" class="btn btn-primary" style="margin: auto; margin-bottom: 12px;">Create</a></div>
                </div>

                
            </div>
        </div>


<?php 
    FOOTER();
    foot(); 
    ?>
</body>

</html>
