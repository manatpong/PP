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
            <strong style="font-size: 36px;">Bill of materials: Detail</strong>
            <div class="row-fluid BOM bg-white">
                    <div class="col-12 line-doc">
                        <h4>BOM header</h4>
                    </div>
                    <div class="col-12">
                       <table class="table">
                           <tbody>
                               <tr>
                                   <td>Material</td>
                                   <th>FG30001</th>
                               </tr>
                               <tr>
                                   <td>Name</td>
                                   <td>น้ำดื่ม ปริมาณ 330 มิลลิลิตร</td>
                               </tr>
                           </tbody>
                       </table>
                    </div>
                </div>

                <div class="row-fluid BOM bg-white">
                    <div class="col-12 line-doc">
                        <h4>Component List:</h4>
                    </div>
                    <div class="col-12">
                       <table class="table text-center">
                           <tbody>
                               <tr>
                                  <th></th>
                                   <th>Material</th>
                                   <th>Description</th>
                                   <th>Quantity</th>
                                   <th>Unit</th>
                               </tr>
                               <tr>
                                    <td>1</td>
                                   <td>MAT10001</td>
                                   <td>ขวดน้ำ ขนาด 600 มิลลิลิตร</td>
                                   <td>1</td>
                                   <td>EA</td>
                               </tr>
                               <tr>
                                    <td>2</td>
                                   <td>MAT10002</td>
                                   <td>ฝาขวด ขนาดเล็ก 12 เซนติเมตร</td>
                                   <td>1</td>
                                   <td>EA</td>
                               </tr>
                               <tr>
                                    <td>3</td>
                                   <td>MAT10003</td>
                                   <td>ฉลาก</td>
                                   <td>1</td>
                                   <td>EA</td>
                               </tr>
                               <tr>
                                    <td>4</td>
                                   <td>MAT10004</td>
                                   <td>น้ำ</td>
                                   <td>1</td>
                                   <td>Liter</td>
                               </tr>
                           </tbody>
                       </table>
                    </div>
                </div>
            </div>
        </div>


<?php 
    FOOTER();
    foot(); 
    ?>
</body>

</html>
