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
            <strong style="font-size: 36px;">Production Order: Materials Detail</strong>
                <div class="row-fluid BOM bg-white">
                    <div class="col-12 line-doc">
                        <h4>Header</h4>
                    </div>
                    <div class="col-12">
                       <table class="table">
                           <tbody>
                               <tr>
                                   <td>Production Sch.</td>
                                   <td><input id="mat-id" type="text" class="form-control" value="004" name="" style="width: 60%;" disabled></td>
                               </tr>
                               <tr>
                                   <td>Description</td>
                                   <td><input id="mat-id" type="text" class="form-control" value="Production Scheduler FG30001" style="width: 60%;" disabled></td>
                               </tr>
                               <tr>
                                   <td>Document Date</td>
                                   <td><input id="mat-id" type="text" class="form-control" value="08/04/2018" style="width: 60%;" disabled></td>
                               </tr>
                           </tbody>
                       </table>
                    </div>
                </div>

                <div class="row-fluid BOM bg-white">
                    <div class="col-12 line-doc">
                        <h4>Materials Detail</h4>
                    </div>
                    <table class="table text-center">
                           <tbody>
                               <tr>
                                   <th>Item</th>
                                   <th>Material</th>
                                   <th>Description</th>
                                   <th>Used</th>
                                   <th>Unit</th>
                               </tr>
                               <tr>
                                   <td>1</td>
                                   <td>MAT10001</td>
                                   <td>ขวดน้ำ ขนาด 330 มิลลิลิตร</td>
                                   <td>1000</td>
                                   <td>EA</td>
                               </tr>
                               <tr>
                                   <td>2</td>
                                   <td>MAT10005</td>
                                   <td>ฝาขวด ขนาดเล็ก 7 เซนติเมตร</td>
                                   <td>1000</td>
                                   <td>EA</td>
                               </tr>
                               <tr>
                                   <td>3</td>
                                   <td>MAT10007</td>
                                   <td>ฉลาก</td>
                                   <td>1000</td>
                                   <td>EA</td>
                               </tr>
                               <tr>
                                   <td>4</td>
                                   <td>MAT10008</td>
                                   <td>น้ำ</td>
                                   <td>330</td>
                                   <td>Liter</td>
                               </tr>
                           </tbody>
                       </table>
                    <div class="row"><a href="po_new.php" class="btn btn-primary" style="margin: auto; margin-bottom: 12px;">Overview</a></div>
                </div>
            </div>
        </div>


<?php 
    FOOTER();
    foot(); 
    ?>
</body>

</html>
