<div class="row mb">
            <div class="boxtrai mr ">
            <div class="row mb">
                
                    <div class="boxtitle">Cập Nhật Tài Khoản</div>
                    <div class="boxcontent row formtaikhoan">
                        <?php
                            if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                                extract($_SESSION['user']);

                            }
                        ?>
                        <form action="index.php?act=edit_taikhoan" method="post">
                        <div class="row mb10 formtaikhoan">Email
                        <input type="text" name="email" value="<?=$email?>" ></div>
                        <div class="row mb"> Tài Khoản
                        <input type="text" name="user" value="<?=$user?>" ></div>
                        <div class="row mb"> Mật Khẩu
                        <input type="password" name="pass" value="<?=$pass?> "></div>
                        <div class="row mb"> Địa Chỉ
                        <input type="text" name="addres" value="<?=$addres?> "></div>
                        <div class="row mb"> Điện Thoại
                        <input type="text" name="tel" value="<?=$tel?> "></div>
                        <div class="row mb formtaikhoan">
                            <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" value="Cập Nhật" name="capnhat">
                        <input type="reset" value="Nhập Lại"></div>
                        </form>
                        <h2 class="thongbao">
                        <?php 

                            
                            if(isset($thongbao)&&($thongbao!="")){
                                echo $thongbao;
                            }
                        ?>
                        </h2>
                    </div>
                </div>
          
            </div>
            <div class="boxphai">
            <?php  
                include "view/boxright.php";
                ?>
            </div>
        </div>