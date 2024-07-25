<?php 
if(is_array($sanpham)){
    extract($sanpham);
}
    $hinhpath="../upload/".$img;
    if(is_file($hinhpath)){
        $hinh = "<img src='".$hinhpath."'height='80'>";
        } else {
            $hinh = " không có hình ảnh";
            }
?>
<div class="row">
            <div class="row header formtitle"> <h1>CHỈNH SỬA LOẠI HÀNG</h1></div>
            <div class="row formcontent">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="row mb ">
                    <select name="iddm">
                    <option value="0" selected>Tất Cả </option>
                    <?php 
                        foreach ($listdanhmuc as $danhmuc) {
                           extract($danhmuc);
                           if($iddm == $id) {$s="selected";
                        } else{$s="";
                        
                            }

                                echo '<option value="'.$id.'"'.$s.'>'.$name.'</option>';
                        }
                        ?>

                        </select>
                    </div>
                    <?php 
                    if(is_array($sanpham)){
                        extract($sanpham);
                    }
                    ?>
                    <div class="row mb ">
                    Tên sản phẩm <br>
                    <input type="text" name="tensp" value="<?=$name?>">
                </div>
                <div class="row mb ">
                    Giá <br>
                    <input type="text" name="giasp" value="<?=$price?>">
                </div>
                <div class="row mb ">
                   HÌnh ảnh <br>
                    <input type="file" name="hinh" >
                    <br>
                    <br>
                    <?=$hinh?>
                </div>
                <div class="row mb ">
                    Mô tả <br>
                    <textarea name="mota" cols="30" rows="10"><?=$mota?></textarea>
                </div>
                
                <div class="row mb ">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" name="capnhat" value="CẬP NHẬT">
                    <input type="reset" value="NHẬP LẠI">
                    <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
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
