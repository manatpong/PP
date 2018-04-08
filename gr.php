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
            <strong style="font-size: 36px;">Goods Receipt</strong>
                <div class="row-fluid BOM bg-white">
                    <div class="col-12 line-doc">
                        <h4>Header</h4>
                    </div>
                    <div class="col-12">
                       <table class="table">
                           <tbody>
                               <tr>
                                   <td>Goods Receipt</td>
                                   <td><input id="mat-id" type="text" class="form-control" value="MW0001" name="" style="width: 60%;" disabled></td>
                               </tr>
                               <tr>
                                   <td>Production Order Ref.</td>
                                   <td><input id="mat-id" type="text" class="form-control" value="PO10001" style="width: 60%;" disabled></td>
                               </tr>
                               <tr>
                                   <td>Desription</td>
                                   <td><input id="mat-id" type="text" class="form-control" value="Finished Goods from Production Order 10001" style="width: 60%;" disabled></td>
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
                        <h4>Item Overview</h4>
                    </div>
                    <table class="table text-center">
                           <tbody>
                               <tr>
                                   <th>Item</th>
                                   <th>Material</th>
                                   <th>Description</th>
                                   <th>Quantity</th>
                                   <th>Unit</th>
                               </tr>
                               <tr>
                                   <td>1</td>
                                   <td>FG10001</td>
                                   <td>น้ำ ขนาด 330 มิลลิลิตร</td>
                                   <td>1000</td>
                                   <td>EA</td>
                               </tr>
                               <tr>
                                   <td>2</td>
                                   <td>FG30002</td>
                                   <td>น้ำดื่ม ปริมาณ 600 มิลลิลิตร</td>
                                   <td>1000</td>
                                   <td>EA</td>
                               </tr>
                               <tr>
                                   <td>3</td>
                                   <td>FG30003</td>
                                   <td>น้ำดื่ม ปริมาณ 1.5 ลิตร</td>
                                   <td>1000</td>
                                   <td>EA</td>
                               </tr>
                               <tr>
                                   <td>4</td>
                                   <td>FG30004</td>
                                   <td>น้ำดื่ม ปริมาณ 6 ลิตร</td>
                                   <td>1000</td>
                                   <td>EA</td>
                               </tr>
                               <tr>
                                   <th>Total</th>
                                   <td></td>
                                   <td></td>
                                   <th>4000</th>
                                   <th>EA</th>
                               </tr>
                           </tbody>
                       </table>
                    <div class="row"><a href="track.php" class="btn btn-primary" onclick="confirm('Are you sure?')" style="margin: auto; margin-bottom: 12px;">Submit</a></div>
                </div>
            </div>
        </div>


<?php 
    FOOTER();
    foot(); 
    ?>
</body>

</html>
