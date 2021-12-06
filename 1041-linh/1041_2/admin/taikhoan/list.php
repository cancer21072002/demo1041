<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
    .title {
        padding-left: 100px;
    }

    .frmcontent {
        padding-left: 100px;
    }
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

<div>
    <div class=" frmtitle">
        <H1 class="title">DANH SÁCH TÀI KHOẢN</H1>
    </div>
    <div class="frmcontent">

        <div>
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th></th>
                    <th>MÃ TÀI KHOẢN</th>
                    <th class="the">USER NAME</th>
                    <th class="the">PASS</th>
                    <th class="the">EMAIL</th>
                    <th class="the">ĐỊA CHỈ</th>
                    <th class="the">ĐIỆN THOẠI</th>
                    <th class="thear">ACTION</th>
                </tr>
                </thead>
               
                <?php
                foreach ($listtaikhoan as $taikhoan) {
                    extract($taikhoan);
                    // $suatk = "index.php?act=suatk&id=" . $id;
                    $xoatk = "index.php?act=xoatk&id=" . $id;

                    echo '<tr>
                                        <td ><input type="checkbox" name="" id=""></td>
                                        <td >' . $id . '</td>
                                        <td >' . $user . '</td>
                                        <td >' . $pass . '</td>
                                        <td >' . $email . '</td>
                                        <td >' . $address . '</td>
                                        <td >' . $tell . '</td>
                                        <td >' . $role . '</td>
                                        <td> <a href="' . $xoatk . '"><input class="sbm" type="button" value="Xóa"></a></td>
                                    </tr>';
                }

                ?>


            </table>
        </div>
        <div class="row mb10">
            <!-- <input class="btnn" type="button" value="Chọn tất cả">
            <input class="btnn" type="button" value="Bỏ chọn tất cả">
            <input class="btnn" type="button" value="Xóa các mục đã chọn"> -->
            <!-- <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a> -->
        </div>
    </div>
</div>