<style>
    img {
        width: 90px;
        height: 106px;
    }
    #ip{
        border: 1px rgb(255, 255, 255) solid;
    border-radius: 5px;
    padding: 5px 10px;
    background-color: #fff;
    border: 1px solid rgb(75, 74, 74);
    margin-bottom: 20px;
    }
</style>
<div class="conteiner">
    <div class="row header">
        <h1 class="title" style=" font-family: Helvetica;">Thêm Mới Sản Phẩm</h1>
    </div>
    <div class="row frmconten">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
      
            <div >
                Danh Mục <br>
               <select name="iddm" id="ip">
                   <?php
                   foreach ($listloaihang as $loaihang) {
                       extract($loaihang);
                       echo '<option value="'.$id.'">'.$name.'</option>';
                       # code...
                   }
                   ?>
                  
               </select>
            </div>
            <!-- <br> -->  
            <div class="row mb10">
                Tên Sản Phẩm <br>
                <input class="inp" type="text" name="tensp">
            </div>
            <div class="row mb10">
                Giá <br>
                <input class="inp" type="text" name="giasp">
            </div>
            <div class="row mb10">
               Hình Ảnh<br>
                <input type="file" name="hinh" id="">
            </div>
            <div class="row mb10">
                Mô Tả <br>
                <textarea style="border-radius:7px" name="mota" id="" cols="53" rows="10"></textarea>
            </div>
            <div class="padd">
                <input class="btnn" type="submit" name="themmoi" value="Thêm Mới">
                <input class="btnn" type="reset" value="Nhập Lại">
                <a href="index.php?act=listsp"><input class="btnn" type="button" value="Danh Sách"></a>
            </div>
            <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>

        </form>

    </div>

</div>
</main>
</div>