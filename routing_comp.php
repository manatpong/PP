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
            <strong style="font-size: 36px;">Routing Detail: Component</strong>
            <div class="row"><a href="routing_detail.php" class="btn btn-success" style="margin-left: 25px; margin-bottom: 0px; margin-top: 10px">Overview</a></div>
                <div class="row-fluid BOM bg-white">
                    <div class="col-12 line-doc">
                        <h4>Header</h4>
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
                        <h4>Item Overview</h4>
                    </div>
                    <div class="col-12">
                       <table class="table text-center">
                           <tbody>
                               <tr>
                                   <th>Item</th>
                                   <th>Material</th>
                                   <th>Description</th>
                                   <th>Quantity</th>
                                   <th>Unit</th>
                                   <th>Operation</th>
                               </tr>
                               <tr>
                                   <td>1</td>
                                   <td>MAT10001</td>
                                   <td>ขวดน้ำ ขนาด 330 มิลลิลิตร</td>
                                   <td>1000</td>
                                   <td>EA</td>
                                   <td>60</td>
                               </tr>
                               <tr>
                                   <td>2</td>
                                   <td>MAT10005</td>
                                   <td>ฝาขวด ขนาดเล็ก 7 เซนติเมตร</td>
                                   <td>1000</td>
                                   <td>EA</td>
                                   <td>60</td>
                               </tr>
                               <tr>
                                   <td>3</td>
                                   <td>MAT10007</td>
                                   <td>ฉลาก</td>
                                   <td>1000</td>
                                   <td>EA</td>
                                   <td>60</td>
                               </tr>
                               <tr>
                                   <td>4</td>
                                   <td>MAT10008</td>
                                   <td>น้ำ</td>
                                   <td>330</td>
                                   <td>Liter</td>
                                   <td>10</td>
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
