<div class="row mb">
            <div class="boxtrai mr ">
     
                <div class="row mb">
                <div class="boxtitle">Đơn Hàng Của Tôi</div>
                    <div class="boxcontent row ">
                        <table>
                          <tr>
                            <th>Mã Đơn hàng</th>
                            <th>Ngày Đặt</th>
                            <th>Số Lượng Mặt Hàng</th>
                            <th>tổng giá trị đơn hàng</th>
                            <th>Tình Trạng Đơn Hàng</th>
                          </tr> 
                          <?php 
                            if(is_array($listbill)){
                                foreach($listbill as $bill){
                                    extract($bill);
                                    $ttdh=get_ttdh($bill['bill_status']);
                                    $count=loadall_cart_count($bill['id']);
                                    echo '<tr>
                                        <td></td>
                                        <td>'.$bill["id"].'</td>
                                        <td>'.$bill["ngaydathang"].'</td>
                                        <td>'.$count.'</td>
                                        <td>'.$bill["total"].'</td>
                                        <td>'.$ttdh.'</td>
                                    </tr>';
                                }
                            }
                          ?>
                           
                            <!-- <tr>
                                <td>1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><input type="button" value="Xoá"></td>
                            </tr> -->
                        </table>
                      
                    </div>
                </div>
                <!-- <div class="row mb bill">
                <a href="index.php?act=bill"><input type="submit" value="Tiếp Tục Đặt Hàng"> </a><a href="index.php?act=delcart"> <input type="button" value="Xoá Giỏ Hàng"></a>
                </div> -->
            </div>
            <div class="boxphai">
            <?php  include "view/boxright.php";?>
            </div>
        </div>