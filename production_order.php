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
            <strong style="font-size: 36px;">Production Order</strong>

                <div class="row-fluid BOM bg-white">
                    <div class="col-12 line-doc">
                        <h4>Planed Order</h4>
                    </div>
                    <div class="col-12">
                       <table class="table text-center">
                           <tbody>
                               <tr>
                                  <th>Planed Order</th>
                                   <th><select class="selection form-control" style="text-align: center">
                                        <option>001: Production Scheduler FG30001</option>
                                        <option>002: Production Scheduler FG30004</option>
                                        <option>003: Production Group 1</option>
                                    </select>
                                  </th>
                                </tr>

                           </tbody>
                       </table>
                    </div>
                    <div class="row"><a href="po_new.php" class="btn btn-primary" style="margin: auto; margin-bottom: 12px;">Create New</a></div>
                </div>
            </div>
        </div>


<?php 
    FOOTER();
    foot(); 
    ?>
</body>

</html>
