<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row mb">

            <div class="boxtitle">Cập Nhật Tài Khoản</div>
            <div class="row boxcontent formtaikhoan ">
                <?php
                if (isset($_SESSION['user'])&&(is_array($_SESSION['user']))) {
                    extract($_SESSION['user']);

                }
                ?>
                <form action="index.php?act=edit_taikhoan" method="post">
                    <div class="row mb10">
                        EMAIL:
                        <input type="email" name="email" id="" value="<?=$email?>">
                    </div>
                    <div class="row mb10">
                        USER NAME:
                        <input type="text" name="user" id=""value="<?=$user?>">

                    </div>
                    <div class="row mb10">
                        PASS WORD:
                        <input type="password" name="pass" id=""value="<?=$pass?>">
                    </div>
                    <div class="row mb10">
                        ADDRESS:
                        <input type="text" name="address" id=""value="<?=$address?>">
                    </div>
                    <div class="row mb10">
                       PHONE:
                        <input type="text" name="tell" id=""value="<?=$tell?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" value="Cập Nhật" name="capnhat">
                        <input type="reset" value="Nhập Lại">
                    </div>

                </form>
                <h2 class="thongbao">
                    <?php
                    if (isset($thongbao) && ($thongbao !== "")) {
                        echo $thongbao;
                    }
                    ?>
                </h2>
            </div>
        </div>

    </div>

    <div class="boxphai">
        <?php include "view/boxright.php"; ?>
    </div>