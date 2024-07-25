<div class="row">
            <div class="row header formtitle mb"> <h1>DANH SÁCH LOẠI HÀNG HÓA</h1></div>
           
            <form action="" method="post">
                        <input type="text" name="kyw" id="">
                        <select name="iddm" id="">
                        <?php 
                        foreach ($listdanhmuc as $danhmuc) {
                           extract($danhmuc);
                           echo '<option value="'.$id.'">'.$name.'</option>';
                        }
                        ?>

                        </select>
                        <input type="submit" name="listok" value="OK">
                    </form>
                    
            <div class="row formcontent">

                <div class="row mb formdsloai">
                    
                   <table>
                    <tr>
                        <th></th>
                        <th>MÃ SẢN PHẨM</th>
                        <th>TÊN SẢN PHẨM</th>
                        <th>HÌNH</th>
                        <th>GIÁ</th>
                        <th>LƯỢT XEM</th>
                        <th></th>
                    </tr>
                    <?php 
                    foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $suasp="index.php?act=suasp&id=".$id;
                    $xoasp="index.php?act=xoasp&id=".$id;
                    $hinhpath="../upload/".$img;
                    if(is_file($hinhpath)){
                        $hinh = "<img src='".$hinhpath."'height='80'>";
                    } else {
                        $hinh = " không có hình ảnh";
                    }
                    echo ' <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>'.$hinh.'</td>
                        <td>'.$price.'</td>
                        <td>'.$luotxem.'</td>
                        <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a> <a href="'.$xoasp.'"><input type="button" value="Xóa"></a></td>
                    </tr>';
                    }
                    ?>                    
                   </table>
                </div>
            <div class="row mb ">
                <input type="button" value="CHỌN TẤT CẢ">
                <input type="button" value="BỎ CHỌN TẤT CẢ">
                <input type="button" value="XÓA CÁC MỤC ĐÃ CHỌN">
                <a href="index.php?act=addsp"><input type="button" value="NHẬP MỚI">
                </div></a>
            </div>
 </div>