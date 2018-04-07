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
            <strong style="font-size: 36px;">Routing: Display</strong>
            <div class="row"><a href="#" class="btn btn-success" style="margin-left: 25px; margin-bottom: 0px; margin-top: 10px">Graphic</a></div>
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
                                   <th>Operation</th>
                                   <th>Work Center</th>
                                   <th>Description</th>
                                   <th>Time</th>
                                   <th>Time Unit</th>
                                   <th>Unit</th>
                               </th>
                               <tr>
                                   <td></td>
                                   <td>10</td>
                                   <td>INSP10001</td>
                                   <td>ตรวจสอบคุณภาพน้ำและปรับสภาพน้ำ</td>
                                   <td>6</td>
                                   <td><select class="selection form-control" style="text-align: center" disabled>
                                        <option>Seconds</option>
                                        <option selected>Minutes</option>
                                        <option>Hours</option>
                                    </select></td>
                                   <td><select class="selection form-control" style="text-align: center" disabled>
                                        <option>EA</option>
                                        <option>Liter</option>
                                        <option>Milliliter</option>
                                    </select>
                                 </td>
                               </tr>
                               <tr>
                                   <td></td>
                                   <td>20</td>
                                   <td>FILT10001</td>
                                   <td>การกรองด้วยระบบ Reverse osmosis</td>
                                   <td>10</td>
                                   <td><select class="selection form-control" style="text-align: center" disabled>
                                        <option>Seconds</option>
                                        <option selected>Minutes</option>
                                        <option>Hours</option>
                                    </select></td>
                                   <td><select class="selection form-control" style="text-align: center" disabled>
                                        <option>EA</option>
                                        <option>Liter</option>
                                        <option>Milliliter</option>
                                    </select>
                                 </td>
                               </tr>
                               <tr>
                                   <td></td>
                                   <td>30</td>
                                   <td>FILT10001</td>
                                   <td>กรองแบบละเอียดด้วยไมโครฟิลเตอร์</td>
                                   <td>10</td>
                                   <td><select class="selection form-control" style="text-align: center" disabled>
                                        <option>Seconds</option>
                                        <option selected>Minutes</option>
                                        <option>Hours</option>
                                    </select></td>
                                   <td><select class="selection form-control" style="text-align: center" disabled>
                                        <option>EA</option>
                                        <option>Liter</option>
                                        <option>Milliliter</option>
                                    </select>
                                 </td>
                               </tr>
                               <tr>
                                   <td></td>
                                   <td>40</td>
                                   <td>DISF10001</td>
                                   <td>ฆ่าเชื้อด้วยรังสี UV</td>
                                   <td>8</td>
                                   <td><select class="selection form-control" style="text-align: center" disabled>
                                        <option>Seconds</option>
                                        <option selected>Minutes</option>
                                        <option>Hours</option>
                                    </select></td>
                                   <td><select class="selection form-control" style="text-align: center" disabled>
                                        <option>EA</option>
                                        <option>Liter</option>
                                        <option>Milliliter</option>
                                    </select>
                                 </td>
                               </tr>
                               <tr>
                                   <td></td>
                                   <td>50</td>
                                   <td>DISF20001</td>
                                   <td>การฆ่าเชื้อด้วยโอโซน</td>
                                   <td>12</td>
                                   <td><select class="selection form-control" style="text-align: center" disabled>
                                        <option>Seconds</option>
                                        <option selected>Minutes</option>
                                        <option>Hours</option>
                                    </select></td>
                                   <td><select class="selection form-control" style="text-align: center" disabled>
                                        <option>EA</option>
                                        <option>Liter</option>
                                        <option>Milliliter</option>
                                    </select>
                                 </td>
                               </tr>
                               <tr>
                                   <td></td>
                                   <td>60</td>
                                   <td>PACK10001</td>
                                   <td>บรรจุน้ำ ปิดฝาขวด และติดฉลาก</td>
                                   <td>6</td>
                                   <td><select class="selection form-control" style="text-align: center" disabled>
                                        <option>Seconds</option>
                                        <option selected>Minutes</option>
                                        <option>Hours</option>
                                    </select></td>
                                   <td><select class="selection form-control" style="text-align: center" disabled>
                                        <option>EA</option>
                                        <option>Liter</option>
                                        <option>Milliliter</option>
                                    </select>
                                 </td>
                               </tr>
                               <tr>
                                   <td></td>
                                   <td>70</td>
                                   <td>PACK20001</td>
                                   <td>แพ็คใส่กล่อง</td>
                                   <td>8</td>
                                   <td><select class="selection form-control" style="text-align: center" disabled>
                                        <option>Seconds</option>
                                        <option selected>Minutes</option>
                                        <option>Hours</option>
                                    </select></td>
                                   <td><select class="selection form-control" style="text-align: center" disabled>
                                        <option>EA</option>
                                        <option>Liter</option>
                                        <option>Milliliter</option>
                                    </select>
                                 </td>
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
