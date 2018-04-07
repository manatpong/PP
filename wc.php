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
            <strong style="font-size: 36px;">Work Center</strong>

                <div class="row-fluid BOM bg-white">
                    <div class="col-12 line-doc">
                        <h4>Work center overview</h4>
                    </div>
                    <div class="col-12">
                       <table class="table text-center">
                           <tbody>
                               <tr>
                                  <th></th>
                                   <th>Work Center</th>
                                   <th>Description</th>
                                   <th>Capacity</th>
                                   <th>No. cap</th>
                               </tr>
                               <tr>
                                    <td>1</td>
                                   <td>INSP10001</td>
                                   <td>แผนกตรวจสอบคุณภาพน้ำ</td>
                                   <td>Machine</td>
                                   <td>8</td>
                               </tr>
                               <tr>
                                    <td>2</td>
                                   <td>FILT10001</td>
                                   <td>หน่วยกรองน้ำ</td>
                                   <td>Machine</td>
                                   <td>4</td>
                               </tr>
                               <tr>
                                    <td>3</td>
                                   <td>DISF10001</td>
                                   <td>ศูนย์ฆ่าเชื้อ</td>
                                   <td>Machine&Labor</td>
                                   <td>3</td>
                               </tr>
                               <tr>
                                    <td>4</td>
                                   <td>PACK10001</td>
                                   <td>ศูนย์แพ็คสินค้า</td>
                                   <td>Machine</td>
                                   <td>5</td>
                               </tr>
                           </tbody>
                       </table>
                    </div>
                    <div class="row"><a href="wc_create.php" class="btn btn-primary" style="margin: auto; margin-bottom: 12px;">Create</a></div>
                </div>
            </div>
        </div>


<?php 
    FOOTER();
    foot(); 
    ?>
</body>

</html>
