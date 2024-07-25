<div class="row">
            <div class="row header formtitle"> <h1>DANH SÁCH THỐNG KÊ</h1></div>
            <div class="row formcontent">
                <div class="row mb formdsloai">
                   <table>
                    <tr>
                        <th>MÃ DANH MỤC</th>
                        <th>TÊN DANH MỤC</th>
                        <th>SỐ lượng</th>
                        <th>GIÁ CAO NHẤT</th>
                        <th>GIÁ THẤP NHẤT</th>
                        <th>GIÁ TRUNG BÌNH</th>
                    </tr>
                    <?php 
                    foreach ($listtk as $tk) {
                    extract($tk);
                    echo ' <tr>
                        <td>'.$madm.'</td>
                           <td>'.$tendm.'</td>
                        <td>'.$countsp.'</td>
                        <td>'.$maxprice.'</td>
                        <td>'.$minprice.'</td>
                        <td>'.$avgprice.'</td>
                    </tr>';
                    }
                    ?>                    
                   </table>
                </div>
            <div class="row mb ">
             <a href="index.php?act=bieudo"><input type="button" value="Xem Biểu Đồ"></a>
                
                </div>
            </div>
 </div>