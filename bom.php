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
            <strong style="font-size: 36px;">Bill of materials</strong>

                <div class="row-fluid BOM bg-white">
                    <div class="col-12 line-doc">
                        <h4>BOM List</h4>
                    </div>
                    <div class="col-12">
                       <table class="table text-center">
                           <tbody>
                               <tr>
                                  <th>List</th>
                                   <th>Material</th>
                                   <th>Description</th>
                                   <th>Quantity</th>
                                   <th>Unit</th>
                                   <th>View</th>
                               </tr>
                               <tr>
                                    <td>1</td>
                                   <td>FG30001</td>
                                   <td>น้ำดื่ม ปริมาณ 330 มิลลิลิตร</td>
                                   <td>1</td>
                                   <td>EA</td>
                                   <td><a class="btn btn-success" href="bom_detail.php">Detail</a></td>
                               </tr>
                               <tr>
                                    <td>2</td>
                                   <td>FG30002</td>
                                   <td>น้ำดื่ม ปริมาณ 600 มิลลิลิตร</td>
                                   <td>1</td>
                                   <td>EA</td>
                                   <td><a class="btn btn-success" href="bom_detail.php">Detail</a></td>
                               </tr>
                               <tr>
                                    <td>3</td>
                                   <td>FG30003</td>
                                   <td>น้ำดื่ม ปริมาณ 1.5 ลิตร</td>
                                   <td>1</td>
                                   <td>EA</td>
                                   <td><a class="btn btn-success" href="bom_detail.php">Detail</a></td>
                               </tr>
                               <tr>
                                    <td>4</td>
                                   <td>FG30004</td>
                                   <td>น้ำดื่ม ปริมาณ 6 ลิตร</td>
                                   <td>1</td>
                                   <td>EA</td>
                                   <td><a class="btn btn-success" href="bom_detail.php">Detail</a></td>
                               </tr>
                           </tbody>
                       </table>
                    </div>
                    <div class="row"><a href="bom_create.php" class="btn btn-primary" style="margin: auto; margin-bottom: 12px;">Create</a></div>
                </div>
            </div>
        </div>


<?php 
    FOOTER();
    foot(); 
    ?>
</body>

</html>
