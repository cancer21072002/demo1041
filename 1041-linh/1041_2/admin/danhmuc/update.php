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
        <form action="index.php?act=updatedm" method="post">
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

        </form>

    </div>

</div>
</main>
</div>