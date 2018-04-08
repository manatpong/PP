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
            <strong style="font-size: 36px;">Reorder Point: Setting</strong>
                <div class="row-fluid BOM bg-white">
                    <div class="col-12 line-doc">
                        <h4>Detail</h4>
                    </div>
                    <div class="col-12">
                       <table class="table">
                           <tbody>
                               <tr>
                                   <td>Material</td>
                                   <th>MAT10001</th>
                               </tr>
                               <tr>
                                   <td>Description</td>
                                   <td>ขวดน้ำดื่ม ปริมาณ 330 มิลลิลิตร</td>
                               </tr>
                               <tr>
                                   <td>Demand Rate/day</td>
                                   <td><div><input id="mat-id" type="number" class="form-control" name="" style="width: 40%;"></div></td>
                                   <td>Sales Calculate</td>
                                   <td><div><input type="date" name=""> to <input type="date" name=""></div></td>
                               </tr>
                               <tr>
                                   <td>Lead time</td>
                                   <td><input id="mat-id" type="number" class="form-control" name="" style="width: 40%;"></td>
                                   <td>Days</td>
                               </tr>
                               <tr>
                                   <td>Safty Stock</td>
                                   <td><input id="mat-id" type="number" class="form-control" style="width: 40%;"></td>
                                   <td>Unit</td>
                               </tr>
                           </tbody>
                       </table>
                    </div>
                     <div class="row"><a href="rop.php" class="btn btn-primary" style="margin: auto; margin-bottom: 12px;">Save</a></div>
                </div>

                <!-- <div class="row-fluid BOM bg-white">
                    <div class="col-12 line-doc">
                        <h4>Item Detail</h4>
                    </div>
                    <div class="col-12">
                       <table class="table text-center">
                           <tbody>
                               <th>
                                   <td>Item</td>
                                   <td>Component</td>
                                   <td>Description</td>
                                   <td>Quantity</td>
                                   <td>Unit</td>
                               </th>
                               <?php for($i=0;$i<5;$i++){ ?>
                               <tr>
                                   <td></td>
                                   <td><?php echo $i+1; ?></td>
                                   <td><input id="mat-id" type="text" class="form-control" name=""></td>
                                   <td><input id="mat-id" type="text" class="form-control" name="" ></td>
                                   <td><input id="mat-id" type="text" class="form-control" name="" style="width: 60%; margin: auto"></td>
                                   <td><select class="selection" style="text-align: center">
                                        <option>EA</option>
                                        <option>Liter</option>
                                        <option>Milliliter</option>
                                    </select>
                                 </td>
                               </tr>
                               <?php } ?>
                           </tbody>
                       </table>
                    </div>
                    <div class="row"><a href="bom.php" class="btn btn-primary" style="margin: auto; margin-bottom: 12px;">Create</a></div>
                </div> -->
            </div>
        </div>


<?php 
    FOOTER();
    foot(); 
    ?>
</body>

</html>
