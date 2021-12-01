<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row mb">

            <div class="boxtitle">Đăng Ký Thành Viên</div>
            <div class="row boxcontent formtaikhoan ">
                <form action="index.php?act=dangky" method="post">
                    <div class="row mb10">
                        EMAIL:
                        <input type="email" name="email" id="">
                    </div>
                    <div class="row mb10">
                        USER NAME:
                        <input type="text" name="user" id="">

                    </div>
                    <div class="row mb10">
                        PASS WORD:
                        <input type="password" name="pass" id="">
                    </div>
                    <div class="row mb10">
                        <input type="submit" value="Đăng Ký" name="dangky">
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

    <!-- <div class="boxphai">
        <?php include "./user/boxright.php"; ?>
    </div> -->
