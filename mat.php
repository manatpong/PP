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
            <strong style="font-size: 36px;">Materials</strong>

                <div class="row-fluid BOM bg-white">
                    <div class="col-12 line-doc">
                    </div>
                    <div class="col-12">
                       <table class="table text-center">
                           <tbody>
                               <tr>
                                  <th>List</th>
                                   <th>Material</th>
                                   <th>Description</th>
                                   <th>Unit</th>
                                   <th>Material Type</th>
                               </tr>
                               <tr>
                                    <td>1</td>
                                   <td>MAT10001</td>
                                   <td>ขวดน้ำดื่ม ปริมาณ 330 มิลลิลิตร</td>
                                   <td>EA</td>
                                   <td>Material</td>
                               </tr>
                               <tr>
                                    <td>2</td>
                                   <td>MAT10002</td>
                                   <td>ขวดน้ำดื่ม ปริมาณ 600 มิลลิลิตร</td>
                                   <td>EA</td>
                                   <td>Material</td>
                               </tr>
                               <tr>
                                    <td>3</td>
                                   <td>MAT10003</td>
                                   <td>ขวดน้ำดื่ม ปริมาณ 1.5 ลิตร</td>
                                   <td>EA</td>
                                   <td>Material</td>
                               </tr>
                               <tr>
                                    <td>4</td>
                                   <td>MAT10004</td>
                                   <td>ขวดน้ำดื่ม ปริมาณ 6 ลิตร</td>
                                   <td>EA</td>
                                   <td>Material</td>
                               </tr><tr>
                                    <td>5</td>
                                   <td>MAT10005</td>
                                   <td>ฝาขวดเล็ก 7 เซ็นติเมตร</td>
                                   <td>EA</td>
                                   <td>Material</td>
                               </tr>
                               <tr>
                                    <td>6</td>
                                   <td>MAT10006</td>
                                   <td>ฝาขวดใหญ่ 10 เซ็นติเมตร</td>
                                   <td>EA</td>
                                   <td>Material</td>
                               </tr>
                               <tr>
                                    <td>7</td>
                                   <td>MAT10007</td>
                                   <td>ฉลาก</td>
                                   <td>EA</td>
                                   <td>Material</td>
                               </tr>
                           </tbody>
                       </table>
                    </div>
                    <div class="row"><a href="mat_create.php" class="btn btn-primary" style="margin: auto; margin-bottom: 12px;">Create</a></div>
                </div>
            </div>
        </div>


<?php 
    FOOTER();
    foot(); 
    ?>
</body>

</html>
