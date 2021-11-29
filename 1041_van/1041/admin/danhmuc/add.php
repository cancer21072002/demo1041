<!-- <link rel="stylesheet" href="../main.css"> -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<style>
    .tit{
        font-size: 30px;
        padding-bottom: 20px;
        font-family: Montserrat;
    }
</style>
<div class="row">
       
    <div class="row frmconten">
    <h2 class="tit">Quản Lý Loại Hàng</h2>
        <form action="index.php?act=adddm" method="post">
        <!-- <h1 style=" font-family: Helvetica;">Quản Lý Danh Mục</h1> -->
            <div class="pad">
                Mã Loại <br>
                <input class="inp" type="text" name="maloai" id="" disabled placeholder="AUTO ID ._.">
            </div>
            <br>
            <div class="pad">
                Tên Loại <br>
                <input class="inp" type="text" name="tenloai">
            </div>
            <div class="padd">
                <input class="btnn" type="submit" name="themmoi" value="Thêm Mới" >
                <input class="btnn" type="submit" name="themmoi" value="Nhập lại" >
                <!-- <input type="reset" value="Nhập Lại"> -->
                <a href="index.php?act=listdm"><input class="btnn" type="button" value="Danh Sách"></a>
            </div>
            
            <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>

        </form>

    </div>

</div>
</main>
</div>