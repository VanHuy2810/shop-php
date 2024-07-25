<div class="row">
            <div class="row header formtitle"> <h1>DANH SÁCH Đơn hàng</h1></div>
            <br> <br> 
           <div class="row formcontent">
           <form action="index.php?act=listbill" method="post">
                        <input type="text" name="kyw" id="" placeholder="Nhập Mã đơn Hàng">
                        <input type="submit" name="listok" value="go">
                    </form>
     
                <div class="row mb formdsloai">
                    
                   <table>
                    <tr>
                        <th></th>
                        <th>MÃ ĐƠN HÀNG</th>
                        <th>KHÁCH Hàng</th>
                        <th>SỐ LƯỢNG HÀNG</th>
                        <th>GIÁ TRỊ ĐƠN Hàng</th>
                        <th>TÌNH TRẠNG ĐƠN Hàng</th>
                        <th>NGÀY ĐẶT Hàng</th>
                        <th>THAO TÁC</th>
                        
                    </tr>
                    <?php 
                    foreach ($listbill as $bill ) {
                    extract($bill);
                    $kh=$bill["bill_name"].' 
                    <br> '.$bill["bill_email"].'
                    <br> '.$bill["bill_addres"].'
                    <br>'.$bill["bill_tel"];
                    $ttdh=get_ttdh($bill['bill_status']);
                    $countsp=loadall_cart_count($bill['id']);
                    $suatk="index.php?act=suatk&id=".$id;
                    $xoatk="index.php?act=xoabill&id=".$id;
                    echo ' <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$bill['id'].'</td>
                        <td>'.$kh.'</td>
                        <td>'.$countsp.'</td>
                        <td>'.$bill['total'].'</td>
                        <td>'.$ttdh.'</td>
                        <td>'.$bill['ngaydathang'].'</td>
                        <td><a href="'.$suatk.'"><input type="button" value="Sửa"></a> <a href="'.$xoatk.'"><input type="button" value="Xóa"></a></td>
                    </tr>';
                    }
                    ?>                    
                   </table>
                </div>
            <div class="row mb ">
                <input type="button" value="CHỌN TẤT CẢ">
                <input type="button" value="BỎ CHỌN TẤT CẢ">
                <input type="button" value="XÓA CÁC MỤC ĐÃ CHỌN">
                <a href="index.php?act=adddm"><input type="button" value="NHẬP MỚI">
                </div></a>
            </div>
 </div>