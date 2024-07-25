<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X-SHOP</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
    .test li a{
    text-align: center;
    text-decoration: none;
    border : 1px black solid;
    /* thêm cái background color là màu chủ đạo của shop ở đây (background-color)*/
    padding : 10px;
    border-radius : 30px;
    color : white;
}
    .test ul{
        text-align : center;
    }

.test li {
    color: #f1f1f1;
    display: inline-block;
    margin : 0px 20px;
    height: 40px;
    line-height: 40px;
    margin-left: 10px;
}
.test li a:hover {
    background-color: red;
    transition : ease-in-out 0.5s;
}
    </style>
</head>

<body>
    <div class="boxcenter">
        <div class="row mb header">
            <h1> SIÊU THỊ TRỰC TUYẾN</h1>
        </div>
        <div class="row mb menu">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
                <li><a href="index.php?act=lienhe">Liên hệ</a></li>
                <li><a href="index.php?act=gopy">Góp ý</a></li>
                <li><a href="index.php?act=hoidap">Hỏi đáp</a></li>
            </ul>
        </div>