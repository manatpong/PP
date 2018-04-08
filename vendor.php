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
            <strong style="font-size: 36px;">Vendor</strong>

                <div class="row-fluid BOM bg-white">
                    <div class="col-12 line-doc">
                        <h4>All Vendor</h4>
                    </div>
                    <div class="col-12">
                       <table class="table text-center">
                           <tbody>
                               <tr>
                                  <th>List</th>
                                   <th>Name</th>
                                   <th>Address</th>
                                   <th>Telephone</th>
                                   <th>Fax</th>
                                   <th>Website</th>
                               </tr>
                               <tr>
                                    <td>1</td>
                                   <td>บริษัท เชียงใหม่อุตสาหกรรมพลาสติก จำกัด,บริษัท ซี.อาร์.พลาสติก จำกัด</td>
                                   <td>เลขที่ 88 หมู่ 3 ตำบล ตลาดขวัญ อำเภอ ดอยสะเก็ด จังหวัด เชียงใหม่</td>
                                   <td>(053)484548-49,(053)867710-12</td>
                                   <td>053-484547</td>
                                   <td>www.cpi2533.com</td>
                               </tr>
                               <tr>
                                    <td>2</td>
                                   <td>บริษัท วัชรการุณ จำกัด</td>
                                   <td>44/7 ม.6 ซอยวัดพรพระร่วงประสิทธิ์
ถนนสุขาภิบาล5 แขวงออเงิน 
เขตสายไหม กทม.10220 </td>
                                   <td>662-5198366, 
662-5198766</td>
                                   <td>662-5198784</td>
                                   <td>http://www.vacharakarun.com</td>
                               </tr>
                               <tr>
                                    <td>3</td>
                                   <td>บริษัท มิลเลี่ยนโพลีซีล อินดัสตรี้ จำกัด</td>
                                   <td>81/258-259 ซอยเพชรเกษม 116 แขวงหนองค้างพลู เขตหนองแขม กทม 10160</td>
                                   <td>0-2810-7918</td>
                                   <td>0-2810-7939</td>
                                   <td>www.millionpolyseal.com</td>
                               </tr>
                           </tbody>
                       </table>
                    </div>
                    <div class="row"><a href="vendor_create.php" class="btn btn-primary" style="margin: auto; margin-bottom: 12px;">New Entry</a></div>
                </div>
            </div>
        </div>

<?php 
    FOOTER();
    foot(); 
    ?>
</body>

</html>
