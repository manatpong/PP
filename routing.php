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
            <strong style="font-size: 36px;">Routing</strong>

                <div class="row-fluid BOM bg-white">
                    <div class="col-12 line-doc">
                        <h4>Material Routing</h4>
                    </div>
                    <div class="col-12">
                       <table class="table text-center">
                           <tbody>
                               <tr>
                                  <th>Material</th>
                                   <th><select class="selection form-control" style="text-align: center">
                                        <option>FG30001: น้ำดื่ม ปริมาณ 330 มิลลิลิตร</option>
                                        <option>FG30001: น้ำดื่ม ปริมาณ 600 มิลลิลิตร</option>
                                        <option>FG30003: น้ำดื่ม ปริมาณ 1.5 ลิตร</option>
                                        <option>FG30004: น้ำดื่ม ปริมาณ 6 ลิตร</option>
                                    </select></th>
                                   <th><a href="routing_detail.php" class="btn btn-primary">View</a></th>
                                </tr>

                           </tbody>
                       </table>
                    </div>
                    <div class="row"><a href="routing_create.php" class="btn btn-primary" style="margin: auto; margin-bottom: 12px;">Create New</a></div>
                </div>
            </div>
        </div>


<?php 
    FOOTER();
    foot(); 
    ?>
</body>

</html>
