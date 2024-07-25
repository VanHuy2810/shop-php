<?php
    session_start();
    if(isset($_SESSION['mycart'])){
        foreach($_SESSION['mycart'] as $cart){
            echo "ma san pham : ".$cart[0];
            echo "ten san pham : ".$cart[1];
            echo "gia san pham : ".$cart[2];
            echo "sl san pham : ".$cart[3]."<br>";
        }
    }
    echo '<h1> Session đã show</h1>';
    echo '<a href= "1.php"> Khởi Tạo </a>';
?>