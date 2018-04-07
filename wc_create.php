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
            <strong style="font-size: 36px;">Work Center: Create</strong>
                <div class="row-fluid BOM bg-white">
                    <div class="col-12 line-doc">
                        <h4>Header</h4>
                    </div>
                    <div class="col-12">
                       <table class="table">
                           <tbody>
                               <tr>
                                   <td>Work Center</td>
                                   <td><input id="mat-id" type="text" class="form-control" name="" style="width: 60%;"></td>
                               </tr>
                               <tr>
                                   <td>Description</td>
                                   <td><input id="mat-id" type="text" class="form-control" name="" style="width: 60%;"></td>
                               </tr>
                               <tr>
                                  <td>Capacity</td>
                                   <td><select class="selection form-control" style="text-align: center; width: 60%">
                                        <option>Machine</option>
                                        <option>Labor</option>
                                    </select></td>
                                   <td>Number of Capacities</td>
                                   <td><input id="mat-id" type="number" class="form-control" name="" style="width: 40%;"></td>
                               </tr>
                           </tbody>
                       </table>
                    </div>
                    <div class="row"><a href="wc.php" class="btn btn-primary" style="margin: auto; margin-bottom: 12px;" onclick="alert('Work center: INSP10001 was Created')">Create</a></div>
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
                    
                </div> -->
            </div>
        </div>


<?php 
    FOOTER();
    foot(); 
    ?>
</body>

</html>
