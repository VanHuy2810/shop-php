<?php 
if(is_array($dm)){
    extract($dm);
}
?>
<div class="row">
            <div class="row header formtitle"> <h1>CHỈNH SỬA LOẠI HÀNG</h1></div>
            <div class="row formcontent">
                <form action="index.php?act=updatedm" method="post">
                    <div class="row mb ">
                        Mã loại <br>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row mb ">
                    Tên loại <br>
                    <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")){echo $name;}else {echo "";}?>">
                </div>
                <div class="row mb ">
                    <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)){echo $id;}?>">
                    <input type="submit" name="capnhat" value="CẬP NHẬT">
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
