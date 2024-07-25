<div class="row mb">
            <div class="boxtrai mr ">
     
                <div class="row mb">
                <div class="boxtitle">Giỏ Hàng</div>
                    <div class="boxcontent row cart">
                        <table>
                           
                            <?php
                                viewcart(1);
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
                <div class="row mb bill">
                <a href="index.php?act=bill"><input type="submit" value="Tiếp Tục Đặt Hàng"> </a><a href="index.php?act=delcart"> <input type="button" value="Xoá Giỏ Hàng"></a>
                </div>
            </div>
            <div class="boxphai">
            <?php  include "view/boxright.php";?>
            </div>
        </div>