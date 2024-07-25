<div class="row">
            <div class="row header formtitle"> <h1>DANH SÁCH Tài Khoản</h1></div>
            <div class="row formcontent">
                <div class="row mb formdsloai">
                   <table>
                    <tr>
                        <th></th>
                        <th>MÃ TK</th>
                        <th>tên đăng nhập</th>
                        <th>mật khẩu</th>
                        <th>email</th>
                        <th>địa chỉ</th>
                        <th>điện thoại</th>
                        <th>vai trò</th>
                        <th></th>
                    </tr>
                    <?php 
                    foreach ($listtaikhoan as $taikhoan) {
                    extract($taikhoan);
                    $suatk="index.php?act=suatk&id=".$id;
                    $xoatk="index.php?act=xoakh&id=".$id;
                    echo ' <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$user.'</td>
                        <td>'.$pass.'</td>
                        <td>'.$email.'</td>
                        <td>'.$addres.'</td>
                        <td>'.$tel.'</td>
                        <td>'.$role.'</td>
                        <td><a href="'.$suatk.'"><input type="button" value="Sửa"></a> <a href="'.$xoatk.'"><input type="button" value="Xóa"></a></td>
                    </tr>';
                    }
                    ?>                    
                   </table>
                </div>
            <div class="row mb ">
                <input type="button" value="CHỌN TẤT CẢ">
                <input type="button" value="BỎ CHỌN TẤT CẢ">
                <input type="button" value="XÓA CÁC MỤC ĐÃ CHỌN">
                <a href="index.php?act=adddm"><input type="button" value="NHẬP MỚI">
                </div></a>
            </div>
 </div>