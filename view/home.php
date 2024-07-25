<style>
    .{
        height: 10%;
        overflow: hidden;
    }
</style>

<div class="row mb">
            <div class="boxtrai mr ">
                <div class="row">
                    <div class="banner">
                        <!-- Slideshow container -->
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="view/images/banner12.jpg" style="width:100%">
  <div class="text">Sản Phẩm 1</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="view/images/banner22.jpg" style="width:100%">
  <div class="text">Sản Phẩm 2</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="view/images/banner32.jpg" style="width:100%">
  <div class="text">Sản Phẩm 3</div>
</div>

<!-- Next and previous buttons -->
<!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a> -->
</div>
<br>

<!-- The dots/circles -->
<!-- <div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div> -->
                    </div>
                </div>
                <div class="row">
                    <?php 
                        $i=0;
                        foreach($spnew as $sp){
                            extract($sp);
                            $linksp="index.php?act=sanphamct&idsp=".$id;
                            $hinh =$img_path.$img;
                            if(($i==2)||($i==5)||($i==8)){
                                $mr = ""; 
                            }else{
                                $mr ="mr";
                            }
                            echo '<div class="boxsp '.$mr.'">
                            <div class="row img"> <img src="'.$hinh.'" alt=""></div>
                            <p>'.$price.'$</p>
                            <a href="'.$linksp.'">'.$name.'</a>
                            <div class="row btaddtocart"> 
                                <form action="index.php?act=addtocart" method="post">
                                <input type="hidden" name="id" value="'.$id.'">
                                <input type="hidden" name="name" value="'.$name.'">
                                <input type="hidden" name="img" value="'.$img.'">
                                <input type="hidden" name="price" value="'.$price.'">
                                <input type="submit" name="addtocart" value="Thêm Vào Giỏ Hàng">
                                </form>
                            </div>
                        </div>';
                        $i+=1;
                        }
                    ?>
                    <!-- <div class="boxsp mr">
                        <div class="row img"> <img src="view/images/1.jpg" alt=""></div>
                        <p>100$</p>
                        <a href="#">Nhẫn Bạc</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"> <img src="view/images/1.jpg" alt=""></div>
                        <p>100$</p>
                        <a href="#">Nhẫn Bạc</a>
                    </div>
                    <div class="boxsp">
                        <div class="row img"> <img src="view/images/1.jpg" alt=""></div>
                        <p>100$</p>
                        <a href="#">Nhẫn Bạc</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"> <img src="view/images/1.jpg" alt=""></div>
                        <p>100$</p>
                        <a href="#">Nhẫn Bạc</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"> <img src="view/images/1.jpg" alt=""></div>
                        <p>100$</p>
                        <a href="#">Nhẫn Bạc</a>
                    </div>
                    <div class="boxsp">
                        <div class="row img"> <img src="view/images/1.jpg" alt=""></div>
                        <p>100$</p>
                        <a href="#">Nhẫn Bạc</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"> <img src="view/images/1.jpg" alt=""></div>
                        <p>100$</p>
                        <a href="#">Nhẫn Bạc</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"> <img src="view/images/1.jpg" alt=""></div>
                        <p>100$</p>
                        <a href="#">Nhẫn Bạc</a>
                    </div>
                    <div class="boxsp">
                        <div class="row img"> <img src="view/images/1.jpg" alt=""></div>
                        <p>100$</p>
                        <a href="#">Nhẫn Bạc</a> -->
                    <!-- </div> -->
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

                </div>
            </div>
            <div class="boxphai">
                <?php  
                include "boxright.php";
                ?>
            </div>
        </div>