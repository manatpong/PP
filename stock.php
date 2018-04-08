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
            <strong style="font-size: 36px;">Stock</strong>

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
                                   <th>Quantity</th>
                                   <th>Unit</th>
                                   <th>Status</th>
                                   
                               </tr>
                               <tr>
                                    <td>1</td>
                                   <td>MAT10001</td>
                                   <td>ขวดน้ำดื่ม ปริมาณ 330 มิลลิลิตร</td>
                                   <td>30000</td>
                                   <td>EA</td>
                                   <td style="color: #28B463">Available</td>
                               </tr>
                               <tr>
                                    <td>2</td>
                                   <td>MAT10002</td>
                                   <td>ขวดน้ำดื่ม ปริมาณ 600 มิลลิลิตร</td>
                                   <td>30000</td>
                                   <td>EA</td>
                                   <td style="color: #28B463">Available</td>
                               </tr>
                               <tr>
                                    <td>3</td>
                                   <td>MAT10003</td>
                                   <td>ขวดน้ำดื่ม ปริมาณ 1.5 ลิตร</td>
                                   <td>2500</td>
                                   <td>EA</td>
                                   <td style="color: orange">Reorder Point</td>
                               </tr>
                               <tr>
                                    <td>4</td>
                                   <td>MAT10004</td>
                                   <td>ขวดน้ำดื่ม ปริมาณ 6 ลิตร</td>
                                   <td>3000</td>
                                   <td>EA</td>
                                   <td style="color: orange">Reorder Point</td>
                               </tr><tr>
                                    <td>5</td>
                                   <td>MAT10005</td>
                                   <td>ฝาขวดเล็ก 7 เซ็นติเมตร</td>
                                   <td>30000</td>
                                   <td>EA</td>
                                   <td style="color: #28B463">Available</td>
                               </tr>
                               <tr>
                                    <td>6</td>
                                   <td>MAT10006</td>
                                   <td>ฝาขวดใหญ่ 10 เซ็นติเมตร</td>
                                   <td>10</td>
                                   <td>EA</td>
                                   <td style="color: red">Out of Stock</td>
                               </tr>
                               <tr>
                                    <td>7</td>
                                   <td>MAT10007</td>
                                   <td>ฉลาก</td>
                                   <td>30000</td>
                                   <td>EA</td>
                                   <td style="color: #28B463">Available</td>
                               </tr>
                               <tr>
                                    <td>7</td>
                                   <td>MAT10008</td>
                                   <td>น้ำ</td>
                                   <td>Unlimited</td>
                                   <td>Liter</td>
                                   <td style="color: #28B463">Available</td>
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
