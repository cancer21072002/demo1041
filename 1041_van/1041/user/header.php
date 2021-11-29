<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dún bán giày</title>
    <link rel="stylesheet" href="view/css/name.css">

</head>

<body>


    <div class="boxcenter">
        <div>
            <img src="view/image/logojordan.png" width="150" alt="">
        </div>
        <div class="row mb menu" style="display: flex;">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
                <li><a href="index.php?act=lienhe">Liên hệ</a></li>
                <li><a href="index.php?act=gopy">Góp ý</a></li>
                <li><a href="index.php?act=hoidap">Hỏi đáp</a></li>
            </ul>
            <form style="margin-left: 450px;" class="form-inp" action="index.php?act=sanpham" method="post">
                <ul>
                    <li> <input style="padding: 5px 25px;
    border-radius: 5px;" class="inp-search" type="text" name="kyw" placeholder="Search"></li>
                    <li> <input style="padding: 5px 7px;
    border: 2px solid #ccc;
    margin-left: -28px;
    background-color: #567b93;
    color: #fff;
    border-radius: 5px;" class="inp-sbm" type="submit" name="timkiem" value="Tìm kiếm"></li>
                </ul>

            </form>
        </div>
        <!-- <div class="boxfooter searbox">
        
    </div> -->