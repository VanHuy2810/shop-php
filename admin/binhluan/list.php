<div class="row">
            <div class="row header formtitle"> <h1>DANH SÁCH BÌNH LUẬN</h1></div>
            <div class="row formcontent">
                <div class="row mb formdsloai">
                   <table>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Nội dung</th>
                        <th>IdUser</th>
                        <th>Idpro</th>
                        <th>Ngày bình luận</th>
                        <th></th>
                    </tr>
                    <?php 
                    foreach ($listbinhluan as $binhluan) {
                    extract($binhluan);
                    $suabl="index.php?act=suabl&id=".$id;
                    $xoabl="index.php?act=xoabl&id=".$id;
                    echo ' <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$noidung.'</td>
                        <td>'.$iduser.'</td>
                        <td>'.$idpro.'</td>
                        <td>'.$ngaybinhluan.'</td>
                        <td><a href="'.$suabl.'"><input type="button" value="Sửa"></a> <a href="'.$xoabl.'"><input type="button" value="Xóa"></a></td>
                    </tr>';
                    }
                    ?>                    
                   </table>
                </div>
            <div class="row mb ">
                <input type="button" value="CHỌN TẤT CẢ">
                <input type="button" value="BỎ CHỌN TẤT CẢ">
                <input type="button" value="XÓA CÁC MỤC ĐÃ CHỌN">
                </div>
            </div>
 </div>