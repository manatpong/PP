<?php require_once 'includes/config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php head(); ?>
</head>
<body>
    <?php sidebar(); ?>
    <div class="main-panel">
       <?php NAV_Bar(); ?>
       <div class="content container">
            <div class="row-fluid BOM bg-white">
                <div class="col-12 line-doc">
                    <h4>BOM header</h4>
                </div>
                <div class="col-12">
                   <table class="table">
                       <tbody>
                           <tr>
                               <td>Material</td>
                               <td><input id="mat-id" type="text" class="form-control" name=""></td>
                           </tr>
                       </tbody>
                   </table>
                </div>
            </div>

            <div class="row-fluid BOM bg-white">
                <div class="col-12 line-doc">
                    <h4>Item Detail</h4>
                </div>
                <div class="col-12">
                   <table class="table">
                       <tbody>
                           <tr>
                               <td>sth</td>
                               <td><input id="mat-id" type="text" class="form-control" name=""></td>
                           </tr>
                       </tbody>
                   </table>
                </div>
            </div>
        </div>


<?php 
    FOOTER();
    foot(); 
    ?>
</body>

</html>
