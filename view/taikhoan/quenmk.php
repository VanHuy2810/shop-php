<div class="row mb">
            <div class="boxtrai mr ">
            <div class="row mb">
                
                    <div class="boxtitle">Quên Mật Khẩu</div>
                    <div class="boxcontent  formtaikhoan">
                        <form action="index.php?act=quenmk" method="post">
                        <div class="row mb10 formtaikhoan">Email
                        <input type="text" name="email"></div>
                        <div class="row mb formtaikhoan">
                        <input type="submit" value="Gửi" name="guiemail">
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