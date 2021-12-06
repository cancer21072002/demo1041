<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
if (is_array($iddm)) {
    extract($iddm);
}
$hinhpath = "../upload/" . $img;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='90'>";
    // var_dump($hinh);
    // die;
} else {
    $hinh = "Ko có ảnh";
}
?>
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
<div class="container" >
    <div >
        <h1 class="title" style=" font-family: Helvetica;">UPDATE PRODUCTS</h1>
    </div>
    <div class="row frmconten" >

        <?php
        if (isset($thongbao)) {
        echo '<b class="text-success mb-2">' . $thongbao . '</b>';
        }
        ?>
    
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
        <div>
            Danh Mục <br>
            <select class="form-control mr-2 col-2 mb-10" name="iddm">
                <?php
                foreach ($listloaihang as $loaihang) {
                    if ($iddm == $loaihang['id']) $s = "selected";
                    else $s = '';
                    echo '<option value="' . $loaihang['id'] . '" ' . $s . '>' . $loaihang['name'] . '</option>';
                }
                ?>
            </select>
        </div>    
        
        <div class="row mb10">
          Tên Sản Phẩm <br>
          <input id="tenLoai" class="inp" type="text" name="tensanpham" value="<?= $name ?>">
        </div>
        <div class="row mb10">
          Giá <br>
          <input id="gia" class="inp" type="text" name="gia" value="<?= $price ?>">
        </div>    
        <div class="row mb10">
          Hình Ảnh <br>
          <?= $hinh ?>
            <br>
            <input type="file" class="form-control-file p-2 mb-2" id="exampleFormControlFile1" name="hinh">
        </div> 
        <div class="row mb10">
          Mô tả <br>
          <textarea style="border-radius:7px" class="form-control mb-3" id="exampleFormControlTextarea1" cols="53" rows="10" name="mota"><?= $mota ?></textarea>
        </div> 
            
            <br>
            <input class="btnn " name="id" type="hidden" value="<?= $id ?>">
            
            <input class="btnn btn-success rounded" name="capnhat" type="submit" value="Cập nhật">
            
            <input class="btnn btn-dark rounded" type="reset" value="Nhập lại" name="bnt_reset">
            
            <a class="btnn btn-primary" href="index.php?act=listps" role="button" name="bnt_list">Danh sách</a>
        </form>
    </div>
    <?php
    if (isset($thongbao)) {
        echo ($thongbao);
    }
    ?>
</div>