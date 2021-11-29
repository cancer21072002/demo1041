<!-- <link rel="stylesheet" href="../main.css"> -->
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
    <div class="container" >
        <div >
            <h1 class="title" style=" font-family: Helvetica;"> Quản Lý Loại Hàng</h1>
        </div>
        <div>
            <form action="" method="POST">
                <div>
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th class="th">Chọn</th>
                                <th class="the">Mã Loại</th>
                                <th class="the">Tên Loại</th>
                                <th class="the">ACTION</th>
                            </tr>
                        </thead>

                        <?php

                        foreach ($listloaihang as $loaihang) {
                            extract($loaihang);
                            $suadm = "index.php?act=suadm&id=" . $id;
                            $xoadm = "index.php?act=xoadm&id=" . $id;
                            echo '<tr>
                        <td><input class="thear" type="checkbox" name="" id=""></td>
                        <td class="thear" >' . $id . '</td>
                        <td class="thear">' . $name . '</td>
                        <td class="thear"> 
                        <a href="' . $suadm . '"><input class="btn" type="button" value="Sửa"></a>  
                        <a href="' . $xoadm . '"><input class="sbm" type="button" value="Xóa"></a>
                        </td>
                    </tr>';
                            # code...
                        }
                        ?>

                    </table>
                </div>
                <div class="padd">
                    <input class="btnn" type="button" value="Chọn Tất Cả">
                    <input class="btnn" type="button" value="Bỏ Chọn Tất Cả">
                    <input class="btnn" type="button" value="Xóa Mục Chọn">
                    <a href="index.php?act=adddm"> <input class="btnn" type="button" value="Thêm Mới"></a>
                </div>

            </form>

        </div>


    </div>
</main>