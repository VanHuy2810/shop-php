<div class="row">
            <div class="row header formtitle"> <h1>THÊM MỚI LOẠI HÀNG HÓA</h1></div>
            <div class="row formcontent">
                <form action="index.php?act=adddm" method="post">
                    <div class="row mb ">
                        <!-- Mã loại <br> -->
                        <input type="hidden" name="maloai" disabled>
                    </div>
                    <div class="row mb ">
                    Tên loại <br>
                    <input type="text" name="tenloai">
                </div>
                <div class="row mb ">
                    <input type="submit" name="themmoi" value="THÊM MỚI">
                    <input type="reset" value="NHẬP LẠI">
                    <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php 
                    if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
