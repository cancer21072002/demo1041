<style>
    img {
        width: 90px;
        height: 106px;
    }

    #ip {
        border: 1px rgb(255, 255, 255) solid;
        border-radius: 5px;
        padding: 5px 10px;
        background-color: #fff;
        border: 1px solid rgb(75, 74, 74);
        margin-bottom: 20px;
    }
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
    .title {
        padding-left: 25px;
    }

    .frmcontent {
        padding-left: 100px;
    }
    .thear {
        padding-right: 20px;
    }

    .btnn {
        padding: 5px 7px;
        border: 2px solid rgb(143, 148, 158);
        border-radius: 3px;
        background-color: rgb(155, 179, 196);
        color: #fff;
        margin: 8px;
    }

    .sbm {
        padding: 5px 10px;
        margin-left: 10px;
        border: 2px solid rgb(201, 158, 109);
        border-radius: 3px;
        background-color: rgb(201, 158, 109);
        color: #fff;
    }

    .btn {
        padding: 5px 10px;
        margin-left: 10px;
        border: 2px solid rgb(135, 201, 109);
        border-radius: 3px;
        background-color: rgb(135, 201, 109);
        color: #fff;
    }
</style>

<main>
    <div class="container">
        <div class="row header mb">
            <h1 class="title" style=" font-family: Helvetica;">Danh Sách Sản Phẩm</h1>
        </div>


        <form action="index.php?act=listsp" method="post">
            <input type="text" name="kyw" id="ip" placeholder="Search">
            <select name="iddm" id="ip">
                <option value="0" selected>Tất Cả</option>
                <?php
                foreach ($listloaihang as $loaihang) {
                    extract($loaihang);
                    echo '<option value="' . $id . '">' . $name . '</option>';
                }

                ?>
            </select>
            <input type="submit" name="listok" value="Gửi" id="ip">
        </form>


        <div>
            <form action="" method="">

                <div>

                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th>Chọn</th>
                                <th>Mã Sản Phẩm</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Hình</th>
                                <th>Giá</th>
                                <th>Lượt Xem</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <?php
                        foreach ($listsanpham as $sanpham) {
                            extract($sanpham);
                            $suasp = "index.php?act=suasp&id=" . $id;
                            $xoasp = "index.php?act=xoasp&id=" . $id;
                            $hinhpath = "../upload/" . $img;
                            if (is_file($hinhpath)) {
                                $hinh = "<img src='" . $hinhpath . "' width='200px'> ";
                                // var_dump($hinh);
                                # code...
                            } else {
                                $hinh = "No Photo !";
                            }
                            echo ' <tr>
                           <td><input class="thear" type="checkbox" name="" id=""></td>
                           <td>' . $id . '</td>
                           <td>' . $name . '</td>
                           <td>' . $hinh . '</td>
                           <td>' . $price . '</td>
                           <td>' . $luotxem . '</td>
                           <td>
                               <a href="' . $suasp . '"><input class="btn" type="button" value="Sửa"></a>
                               <a href="' . $xoasp . '"><input class="sbm" type="button" value="Xóa"></a>
                           </td>
                       </tr>';
                        }
                        ?>

                    </table>
                </div>


                <div class="padd">
                    <input class="btnn" type="button" value="Chọn Tất Cả">
                    <input class="btnn" type="button" value="Bỏ Chọn Tất Cả">
                    <input class="btnn" type="button" value="Xóa Mục Chọn">


                    <a href="index.php?act=addsp"> <input class="btnn" type="button" value="Thêm Mới"></a>
                </div>

            </form>

        </div>
    </div>
</main>