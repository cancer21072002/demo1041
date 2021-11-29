<link rel="stylesheet" href="view/css/name.css">
<style>
    .sp {
    grid-template-columns: 2fr 1fr;
    grid-gap: 10px;
    display: grid;
    list-style: none;
}
.btn-inp {
    padding: 5px 10px;
    font-size: 12px;
}
.btn-sb {
    padding: 5px 7px;
    border-radius: 5px;
    border: 1px solid #fff;
    background-color: #567b93;
    font-size: 12px;
}
</style>
<div class="row mb ">
    <div class="boxtitle">TÀI KHOẢN</div>
    <div class="boxcontent formtaikhoan">
        <?php
        #lấy tai khoan ra
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
        ?>
            <div class="row mb10">
                Xin Chào :
                <?= $user ?>
            </div>
            <div class="row mb10">
                <li>
                    <a  href="index.php?act=quenmk">Quên mật khẩu</a>
                </li>
                <li>
                    <a href="index.php?act=edit_taikhoan">Cập Nhật Tài Khoản</a>
                </li>
                <?php if ($role==1){?>
                <li>
                    <a href="admin/index.php">Đăng Nhập Admin</a>
                </li>
                <?php }?>
                <li>
                    <a href="index.php?act=thoat">Thoát</a>
                </li>
            </div>

        <?php
        } else {

        ?>
            <form action="index.php?act=dangnhap" method="post">
                <div class="row mb10">
                    Tên đăng nhập<br>
                    <input type="text" name="user" id="">
                </div>
                <div class="row mb10">
                    Mật khẩu<br>

                    <input type="password" name="pass" id="">
                </div>
                <div class="row mb10">
                    <input type="checkbox" name="" id=""> Ghi nhớ tài khoản?
                </div>
                <div class="row mb10">
                    <input type="submit" value="Đăng nhập" name="dangnhap">
                </div>
            </form>
            <li>
                <a href="#">Quên mật khẩu</a>
            </li>
            <li>
                <a href="index.php?act=dangky">Đăng ký thành viên</a>
            </li>
        <?php } ?>
    </div>
</div>
