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
            <strong style="font-size: 36px;">Routing: Component Allocate</strong>
            <div class="row"><a href="routing_create.php" class="btn btn-success" style="margin-left: 25px; margin-bottom: 0px; margin-top: 10px">Overview</a></div>
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
                               <th>
                                   <td>Item</td>
                                   <td>Material</td>
                                   <td>Description</td>
                                   <td>Quantity</td>
                                   <td>Unit</td>
                                   <td>Operation</td>
                               </th>
                               <?php for($i=0;$i<5;$i++){ ?>
                               <tr>
                                   <td></td>
                                   <td><?php echo $i+1; ?></td>
                                   <td><input id="mat-id" type="text" class="form-control" name=""></td>
                                   <td><input id="mat-id" type="text" class="form-control" name="" disabled></td>
                                   <td><input id="mat-id" type="number" class="form-control" name="" style="width: 60%; margin: auto"></td>
                                   <td><select class="selection form-control" style="text-align: center">
                                        <option>EA</option>
                                        <option>Liter</option>
                                        <option>Milliliter</option>
                                    </select>
                                 </td>
                                 <td><select class="selection form-control" style="text-align: center">
                                        <option>10</option>
                                        <option>20</option>
                                        <option>30</option>
                                        <option>40</option>
                                        <option>50</option>
                                        <option>60</option>
                                        <option>70</option>
                                    </select>
                                 </td>
                               </tr>
                               <?php } ?>
                           </tbody>
                       </table>
                    </div>
                    <div class="row"><a href="routing_create.php" class="btn btn-primary" style="margin: auto; margin-bottom: 12px;">Assign</a></div>
                </div>
            </div>
        </div>


<?php 
    FOOTER();
    foot(); 
    ?>
</body>

</html>
