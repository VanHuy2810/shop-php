<?php
    session_start();
    include '../../admin/model/pdo.php';
    include '../../admin/model/binhluan.php';
    
    $idpro=$_REQUEST['idpro'];
    $dsbl=loadall_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        body{
            margin: 0;
        }
        .binhluan table{
            width: 90%;
            margin-left: 5%;
        }
        .binhluan table td:nth-child(1){
            width: 50%;
        }
        .binhluan table td:nth-child(2){
            width: 20%;
        }
        .binhluan table td:nth-child(3){
            width: 30%;
        }
    </style>
</head>
<body>
    <div class="row mb">
        <div class="boxtitle">BÌNH LUẬN</div>
        <div class="boxcontent2 binhluan" >
            <table>
                <?php
                
                foreach ($dsbl as $bl){
                    extract ($bl);
                    echo '<tr><td>'.$noidung.'</td>';
                    echo '<td>'.$iduser.'</td>';
                    echo '<td>'.$ngaybinhluan.'</td></tr>';
                }
                ?>
            </table>
        </div>
        <div class="boxfooter binhluanform">
            <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                <input type="hidden" name="idpro" value="<?=$idpro?>">
                <input type="text" name="noidung">
                <input type="submit" name="guibinhluan" value="Gửi bình luận">
            </form>
        </div >
        <?php
            // if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
            //     $noidung=$_POST['noidung'];
            //     $idpro=$_POST['idpro'];
            //     $iduser=$_SESSION['user']['id'];
            //     $ngaybinhluan=date('h:i:sa d/m/Y');
            //     insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
            //     header("location: ".$_SERVER['HTTP_REFERER']);
            // }
            $errors = [];
$thongbao = '';

// Kiểm tra xem form đã được submit chưa
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["guibinhluan"])) {
    // Lấy dữ liệu từ form
    $noidung = $_POST['noidung'];
    $idpro = $_POST['idpro'];
    $iduser = $_SESSION['user']['id'];
    $ngaybinhluan = date('h:i:sa d/m/Y');

    // Kiểm tra xem trường nội dung có rỗng không
    if (empty($noidung)) {
        $errors[] = "Vui lòng nhập nội dung bình luận.";
    }

    // Kiểm tra xem có lỗi nào không
    if (empty($errors)) {
        insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
        $thongbao = "Gửi bình luận thành công!";
        header("location: " . $_SERVER['HTTP_REFERER']);
        exit(); // Kết thúc chương trình sau khi chuyển hướng
    } else {
        // Nếu có lỗi, hiển thị thông báo lỗi
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
        ?>
        
    </div>
</body>
</html>