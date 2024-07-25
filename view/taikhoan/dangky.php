<div class="row mb">
            <div class="boxtrai mr ">
            <div class="row mb">
                
                    <div class="boxtitle">Đăng Ký Thành Viên</div>
                    <div class="boxcontent  formtaikhoan">
                        <form action="index.php?act=dangky" method="post">
                        <div class="row mb10 formtaikhoan">Email
                        <input type="text" name="email"></div>
                        <div class="row mb"> Tài Khoản
                        <input type="text" name="user" ></div>
                        <div class="row mb"> Mật Khẩu
                        <input type="password" name="pass" ></div>
                        <div class="row mb formtaikhoan">
                        <input type="submit" value="Đăng Ký" name="dangky">
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