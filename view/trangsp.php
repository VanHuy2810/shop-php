<div class="row mb ">
                    <div class="boxtitle">TÀI KHOẢN</div>
                    <div class="boxcontent formtaikhoan">
                        <?php 
                            if(isset($_SESSION['user'])){
                                extract($_SESSION['user']);
                                ?>
                             <div class="row mb10">
                                Xin Chào <br>
                                <?=$user?>
                            </div>
                            <div class="row mb10">
                            <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                            <li><a href="index.php?act=mybill">Giỏ Hàng Của tôi</a></li>
                            <li><a href="index.php?act=edit_taikhoan">Cập Nhật Thông Tin Tài Khoản</a></li>
                            <?php 
                            if($role==1){
                            ?>
                            <li><a href="admin/index.php">Đăng Nhập admin</a></li>
                            <?php } ?>
                            <li><a href="index.php?act=thoat">Thoát</a></li>
                            </div>
                                <?php
                            }else{

                            
                        ?>
                        <form action="index.php?act=dangnhap" method="post">
                            <div class="row mb10">
                                Tên đăng nhập <br>
                                <input type="text" name="user" >
                            </div>
                            <div class="row mb10">
                                Mật khẩu <br>
                                <input type="password" name="pass">
                            </div>
                            <div class="row mb10">
                                <input type="checkbox" name=""> Ghi nhớ tài khoản?
                            </div>
                            <div class="row mb10">
                                <input type="submit" value="Đăng nhập" name="dangnhap">
                            </div>
                        </form>
                        <li><a href="#">Quên mật khẩu</a></li>
                        <li><a href="index.php?act=dangky">Đăng kí thành viên</a></li>
                        <?php } ?>
                    </div>
                </div>
                <div class="row mb ">
                    <div class="boxtitle">DANH MỤC</div>
                    <div class="boxcontent2 menudoc">
                        <ul>
                          <?php 
                            foreach($dsdm as $dm){
                                extract($dm);
                                $linkdm="index.php?act=sanpham&iddm=".$id;
                                echo '<li>
                                <a href="'.$linkdm.'">'.$name.'</a>
                                </li>';
                            }
                          ?>  
                            <!-- <li><a href="#">Nhẫn</a></li>
                            <li><a href="#">Dây chuyền</a></li>
                            <li><a href="#">Vòng đeo tay</a></li>
                            <li><a href="#">Khuyên tai</a></li> -->
                        </ul>
                    </div>
                    <div class="boxfooter searchbox ">
                        <form action="index.php?act=sanpham" method="post">
                            <input type="text" name="kyw">
                            <input class="formtaikhoan" type="submit" name="timkiem" value="Tìm Kiếm">
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="boxtitle">TOP YÊU THÍCH</div>
                    <div class="boxcontent row">
                        <?php 
                            foreach($dstop10 as $sp){
                                extract($sp);
                                $linksp="index.php?act=sanphamct&idsp=".$id;
                                $img=$img_path.$img;
                                echo '<div class="row mb10 top10">
                                <img src="'.$img.'" alt="">
                                <a href="'.$linksp.'">'.$name.'</a>
                            </div>';
                            }
                        ?>
                        <!-- <div class="row mb10 top10">
                            <img src="view/images/1.jpg" alt="">
                            <a href="#">Silver ring</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/2.jpg" alt="">
                            <a href="#">Dây chuyền</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/3.jpg" alt="">
                            <a href="#">Khuyên tai</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/4.jpg" alt="">
                            <a href="#">Trang sức</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/5.jpg" alt="">
                            <a href="#">Vòng đeo tay</a>
                        </div> -->
                    </div>
                </div>