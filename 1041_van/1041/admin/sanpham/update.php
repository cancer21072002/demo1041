<?php
if (is_array($dm)) {
    extract($dm);
    # code...
}

?>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
<style>
    .title {
        padding-left: 100px;
    }

    /* .frmcontent {
        padding-left: 100px;
    } */
 /* .the{
    padding-left: 10px;
} */
.thear{
    padding-right: 20px;
}
.btnn{
  padding: 5px 7px;
  border: 2px solid rgb(143, 148, 158);
  border-radius: 3px;
  background-color: rgb(155, 179, 196);
  color: #fff;
  margin:8px;
}
.sbm{
  padding: 5px 10px;
  margin-left: 10px;
  border: 2px solid rgb(201, 158, 109);
  border-radius: 3px;
  background-color: rgb(201, 158, 109);
  color: #fff;
}
.btn{
  padding: 5px 10px;
  margin-left: 10px;
  border: 2px solid rgb(135, 201, 109);
  border-radius: 3px;
  background-color: rgb(135, 201, 109);
  color: #fff;
}
</style>

<div class="row">

    <div >
        <h1 class="title" style=" font-family: Helvetica;">UPDATE PRODUCTS</h1>
    </div>
    <div class="row frmconten" >
        <!-- <form action="index.php?act=updatedm" method="post">
            <div class="pad">
                Mã Loại <br>
                <input class="inp"  type="text" name="maloai" id="" disabled placeholder="Auto ID">
            </div>
            <br>
            <div class="pad">
                Tên Loại <br>
                <input class="inp" type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name; ?>">
            </div>
            <div class="padd">
                <input  type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
                <input class="btnn" type="submit" name="capnhat" value="Cập Nhật">
                <input class="btnn" type="reset" value="Nhập Lại">
                <a href="index.php?act=listdm"><input class="btnn" type="button" value="Quay Về Danh Sách"></a>
            </div>
            <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>

        </form> -->
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
      
      <div >
          Danh Mục <br>
         <select name="iddm" id="ip">
             <?php
             foreach ($listdanhmuc as $danhmuc) {
                 extract($danhmuc);
                 echo '<option value="'.$id.'">'.$name.'</option>';
                 # code...
             }
             ?>
            
         </select>
      </div>
      <!-- <br> -->
      <div class="row mb10">
          Tên Sản Phẩm <br>
          <input class="inp" type="text" name="tensp" <?php if(isset($tensp)&&($tensp!="")) echo $tensp; ?>>
      </div>
      <div class="row mb10">
          Giá <br>
          <input class="inp" type="text" name="giasp" <?php if(isset($giasp)&&($giasp!="")) echo $giasp; ?>>
      </div>
      <div class="row mb10">
         Hình Ảnh<br>
          <input type="file" name="hinh" id="" <?php if(isset($hinh)&&($hinh!="")) echo $hinh; ?>>
      </div>
      <div class="row mb10">
          Mô Tả <br>
          <textarea style="border-radius:7px" name="mota" id="" cols="53" rows="10" <?php if(isset($mota)&&($mota!="")) echo $mota; ?>></textarea>
      </div>
      <div class="padd">
          <input class="btnn" type="submit" name="themmoi" value="Cập nhật">
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