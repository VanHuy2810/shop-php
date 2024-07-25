<div class="row mb">
            <div class="boxtrai mr ">
            <div class="test"><ul>
                          <?php 
                            foreach($dsdm as $dm){
                                extract($dm);
                                $linkdm="index.php?act=sanpham&iddm=".$id;
                                echo '<li>
                                <a href="'.$linkdm.'">'.$name.'</a>
                                </li>';
                            }
                          ?>  
                            <!-- <li><a href="#">Nhẫn</a></li>
                            <li><a href="#">Dây chuyền</a></li>
                            <li><a href="#">Vòng đeo tay</a></li>
                            <li><a href="#">Khuyên tai</a></li> -->
                        </ul>
                        </div>
                <div class="row mb">
                <div class="boxtitle">Sản Phẩm <strong><?=$tendm?></strong></div>
                    <div class="boxcontent row">
                        <?php 
                        $i=0;
                        foreach($dssp as $sp){
                            extract($sp);
                            $linksp="index.php?act=sanphamct&idsp=".$id;
                            $hinh =$img_path.$img;
                            if(($i==2)||($i==5)||($i==8)||($i==11)){
                                $mr = ""; 
                            }else{
                                $mr ="mr";
                            }
                            echo '<div class="boxsp '.$mr.'">
                            <div class="row img"> <img src="'.$hinh.'" alt=""></div>
                            <p>'.$price.'$</p>
                            <a href="'.$linksp.'">'.$name.'</a>
                        </div>';
                        $i+=1;
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="boxphai">
            <?php  include "boxright.php";?>
            </div>
        </div>