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
            <strong style="font-size: 36px;">Customer</strong>

                <div class="row-fluid BOM bg-white">
                    <div class="col-12 line-doc">
                        <h4>Customer List</h4>
                    </div>
                    <div class="col-12">
                       <table class="table text-center">
                           <tbody>
                               <tr>
                                  <th>List</th>
                                   <th>Name</th>
                                   <th>Address</th>
                                   <th>Telephone</th>
                               </tr>
                               <tr>
                                    <td>1</td>
                                   <td>แจ่มฟ้าเซฟมาร์ท สาขาหลังมหาวิทยาลัยเชียงใหม่</td>
                                   <td>3/6 หมู่ 8, Sutep, Meung, Chiang Mai 50200, Thailand</td>
                                   <td>053-810-555</td>
                               </tr>
                               <tr>
                                    <td>2</td>
                                   <td>ร้านสหกรณ์มช. สาขามหาวิทยาลัยเชียงใหม่</td>
                                   <td>SuThep, Mueang Chiang Mai District, Chiang Mai 50200</td>
                                   <td>053-217-139</td>
                               </tr>
                               <tr>
                                    <td>3</td>
                                   <td>Waan Café Nimman</td>
                                   <td>นิมมานเหมินทร์ ซอย 13 เทศบาลนครเชียงใหม่</td>
                                   <td>092-623-2823</td>
                               </tr>
                           </tbody>
                       </table>
                    </div>
                    <div class="row"><a href="customer_create.php" class="btn btn-primary" style="margin: auto; margin-bottom: 12px;">New Entry</a></div>
                </div>
            </div>
        </div>

<?php 
    FOOTER();
    foot(); 
    ?>
</body>

</html>
