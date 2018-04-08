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
            <strong style="font-size: 36px;">Routing: Create</strong>
             <div class="row"><a href="routing_allocate.php" class="btn btn-success" style="margin-left: 25px; margin-bottom: 0px; margin-top: 10px">Component Allocate</a></div>
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
                        <h4>Opearation Detail</h4>
                    </div>
                    <div class="col-12">
                       <table class="table text-center">
                           <tbody>
                               <th>
                                   <td>Operation</td>
                                   <td>Work Center</td>
                                   <td>Description</td>
                                   <td>Time</td>
                                   <td>Time Unit</td>
                                   <td>Unit</td>
                               </th>
                               <?php for($i=0;$i<5;$i++){ ?>
                               <tr>
                                   <td></td>
                                   <td><?php echo $i+1; ?>0</td>
                                   <td><input id="mat-id" type="text" class="form-control" name=""></td>
                                   <td><input id="mat-id" type="text" class="form-control" name="" ></td>
                                   <td><input id="mat-id" type="text" class="form-control" name="" style="width: 60%; margin: auto"></td>
                                   <td><select class="selection form-control" style="text-align: center">
                                        <option>Seconds</option>
                                        <option selected>Minutes</option>
                                        <option>Hours</option>
                                    </select></td>
                                   <td><select class="selection form-control" style="text-align: center">
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
                    <div class="row"><a href="routing.php" class="btn btn-primary" style="margin: auto; margin-bottom: 12px;" onclick="alert('Routing: FG30001 was create')">Create</a></div>
                </div>
            </div>
        </div>


<?php 
    FOOTER();
    foot(); 
    ?>
</body>

</html>
