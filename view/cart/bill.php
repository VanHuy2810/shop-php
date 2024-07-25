<div class="row mb">
            <div class="boxtrai mr ">
     
                <form action="index.php?act=billcomform" method="post">
                <div class="row mb">
                <div class="boxtitle">Thông Tin Đặt Hàng</div>
                    <div class="boxcontent row">
                        <table>
                            <?php 
                                if(isset($_SESSION['user'])){
                                    $name=$_SESSION['user']['user'];
                                    $addres=$_SESSION['user']['addres'];
                                    $email=$_SESSION['user']['email'];
                                    $tel=$_SESSION['user']['tel'];
                                }else{
                                    $name="";
                                    $addres="";
                                    $email="";
                                    $tel="";
                                }
                            ?>
                            <tr>
                                <td>Người Đặt Hàng</td>
                                <td><input type="text" name="name" value="<?=$name?>"></td>
                            </tr>
                            <tr>
                                <td>Địa Chỉ</td>
                                <td><input type="text" name="addres" value="<?=$addres?>"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="text" name="email" value="<?=$email?>"></td>
                            </tr>
                            <tr>
                                <td>Điện Thoại</td>
                                <td><input type="text" name="tel" value="<?=$tel?>"></td>
                            </tr>

                        </table>
                    </div>
                </div>
                <div class="row mb">
                <div class="boxtitle">Phương Thức Thanh Toán</div>
                <table>
                    <tr>
                        <td><input type="radio" name="pttt" checked>Trả Tiền Khi Nhận Hàng</td>
                        <td><input type="radio" name="pttt" >Chuyển Khoản Ngân Hàng</td>
                        <td><input type="radio" name="pttt" >Thanh Toán online</td>
                    </tr>
                </table>
                </div>
                <div class="row mb">
                <div class="boxtitle">Thông Tin Giỏ Hàng</div>
                <div class="row boxcontent cart">
                                <table>
                                    <!-- <tr>
                                        <th>STT</th>
                                        <th>Hình</th>
                                        <th>Đơn Giá</th>
                                        <th>Số Lượng</th>
                                        <th>Thành Tiền</th>
                                    </tr> -->
                                    <?php viewcart(0);
                                     ?>
                                </table>
                </div>
               
                </div>
                <div class="row mb bill">
                    <input type="submit" value="Đồng Ý Đặt Hàng" name="dongydathang">
                </div>
                </form>

            </div>         
            <div class="boxphai">
            <?php  include "view/boxright.php";?>
            </div>
</div>