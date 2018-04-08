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
            <strong style="font-size: 36px;">Reorder Point</strong>

                <div class="row-fluid BOM bg-white">
                    <div class="col-12 line-doc">
                        <h4>Material ROP</h4>
                    </div>
                    <div class="col-12">
                       <table class="table text-center">
                           <tbody>
                               <tr>
                                  <th>Material</th>
                                   <th><select class="selection form-control" style="text-align: center">
                                        <option>MAT10001: ขวดน้ำดื่ม ปริมาณ 330 มิลลิลิตร</option>
                                        <option>MAT10002: ขวดน้ำดื่ม ปริมาณ 600 มิลลิลิตร</option>
                                        <option>MAT10003: ขวดน้ำดื่ม ปริมาณ 1.5 ลิตร</option>
                                        <option>MAT10004: ขวดน้ำดื่ม ปริมาณ 6 ลิตร</option>
                                        <option>MAT10005: ฝาขวดเล็ก 7 เซ็นติเมตร</option>
                                        <option>MAT10006: ฝาขวดใหญ่ 10 เซ็นติเมตร</option>
                                        <option>MAT10007: ฉลาก</option>
                                    </select>
                                  </th>
                                   <th><a href="rop_config.php" class="btn btn-primary">Edit</a></th>
                                </tr>

                           </tbody>
                       </table>
                    </div>
                    <div class="row"><a href="rop_setting.php" class="btn btn-primary" style="margin: auto; margin-bottom: 12px;">Setting</a></div>
                </div>
            </div>
        </div>


<?php 
    FOOTER();
    foot(); 
    ?>
</body>

</html>
