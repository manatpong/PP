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
            <strong style="font-size: 36px;">Materials Withdrawal</strong>
                <div class="row-fluid BOM bg-white">
                    <div class="col-12 line-doc">
                        <h4>Header</h4>
                    </div>
                    <div class="col-12">
                       <table class="table">
                           <tbody>
                               <tr>
                                   <td>Mat Withdrawal</td>
                                   <td><input id="mat-id" type="text" class="form-control" value="MW0001" name="" style="width: 60%;" disabled></td>
                               </tr>
                               <tr>
                                   <td>Description</td>
                                   <td><input id="mat-id" type="text" class="form-control" value="Production Order 001" style="width: 60%;" disabled></td>
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
                                   <th>Exist</th>
                                   <th>Unit</th>
                                   <th>Status</th>
                               </tr>
                               <tr>
                                   <td>1</td>
                                   <td>MAT10001</td>
                                   <td>ขวดน้ำ ขนาด 330 มิลลิลิตร</td>
                                   <td>1000</td>
                                   <td>3200</td>
                                   <td>EA</td>
                                   <td style="color: #28B463">Available</td>
                               </tr>
                               <tr>
                                   <td>2</td>
                                   <td>MAT10005</td>
                                   <td>ฝาขวด ขนาดเล็ก 7 เซนติเมตร</td>
                                   <td>1000</td>
                                   <td>2300</td>
                                   <td>EA</td>
                                   <td style="color: #28B463">Available</td>
                               </tr>
                               <tr>
                                   <td>3</td>
                                   <td>MAT10007</td>
                                   <td>ฉลาก</td>
                                   <td>1000</td>
                                   <td>800</td>
                                   <td>EA</td>
                                   <td style="color: red">Not Enough</td>
                               </tr>
                               <tr>
                                   <td>4</td>
                                   <td>MAT10008</td>
                                   <td>น้ำ</td>
                                   <td>330</td>
                                   <td>Unlimited</td>
                                   <td>Liter</td>
                                   <td style="color: #28B463">Available</td>
                               </tr>
                           </tbody>
                       </table>
                    <div class="row"><a href="withdraw.php" class="btn btn-primary" onclick="confirm('Are you sure?')" style="margin: auto; margin-bottom: 12px;">Submit</a></div>
                </div>
            </div>
        </div>


<?php 
    FOOTER();
    foot(); 
    ?>
</body>

</html>
