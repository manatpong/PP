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
            <strong style="font-size: 36px;">Reorder Point</strong>

                <div class="row-fluid BOM bg-white">
                    <div class="col-12 line-doc">
                        <h4>Material ROP</h4>
                    </div>
                    <div class="col-12">
                       <table class="table text-center">
                           <tbody>
                               <tr>
                                  <th>Material</th>
                                   <th><input id="mat-id" type="text" class="form-control" name=""> </th>
                                   <th><a href="rop_config.php" class="btn btn-primary">Edit</a></th>
                                </tr>

                           </tbody>
                       </table>
                    </div>
                    <div class="row"><a href="rop_config.php" class="btn btn-primary" style="margin: auto; margin-bottom: 12px;">Create New</a></div>
                </div>
            </div>
        </div>


<?php 
    FOOTER();
    foot(); 
    ?>
</body>

</html>
