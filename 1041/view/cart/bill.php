
<br>
<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row mb">
            <form action="index.php?act=billcomfim" method="post">
                <div class="boxtitle">Thông Tin Đơn Hàng</div>
                <div class="row content cart">
                    <table style="width: 100%;">
                        <?php
                        if (isset($_SESSION['user'])) {
                            $name = $_SESSION['user']['user'];
                            $address = $_SESSION['user']['address'];
                            $email = $_SESSION['user']['email'];
                            $tel = $_SESSION['user']['tel'];
                            # code...
                        } else {
                            $name = "";
                            $address = "";
                            $email = "";
                            $tel = "";
                        }
                        ?>
                        <tr>
                            <td>Người Đặt Hàng</td>
                            <td><input type="text" name="name" id="" value="<?= $name ?>"></td>
                        </tr>
                        <tr>
                            <td>Địa Chỉ</td>
                            <td><input type="text" name="address" id="" value="<?= $address ?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" id="" value="<?= $email ?>"></td>
                        </tr>
                        <tr>
                            <td>Điện Thoại</td>
                            <td><input type="text" name="tel" id="" value="<?= $tel ?>"></td>
                        </tr>
                    </table>

                </div>
                <div class="row mb">
                    <div class="boxtitle">Phương Thức Thanh Toán</div>
                    <div class="row box">
                        <table>
                            <tr>
                                <td><input type="radio" name="pttt" id="" checked>Thanh toán khi nhận hàng (COD)</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="pttt" id="">Chuyển Khoản Ngân Hàng</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="pttt" id="">Thẻ Tín dụng/Ghi nợ</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row mb">
                    <div class="title">Giỏ Hàng</div>
                    <div class="row content cart">
                        <table style="width: 100%;">
                           

                            <?php
                            viewcart(0);
                            ?>
                        </table>
                    </div>
                </div>
            </form>
        </div>
        <div>
            <input type="submit" name="dongydathang" id="" value="Đồng Ý Đặt Hàng"> <a href="index.php?act=delcart"><input type="button" value="Xóa Giỏ Hàng"></a>
        </div>
    </div>
    
</div>


</div>