<?php
function viewcart($del)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    if ($del == 1) {
        $xoasp_th = ' <th>Thao Tác</th style="padding-right:30px;">';
        $xoasp_td2 = '<td></td>';
        # code...
    } else {
        $xoasp_th = '';
        $xoasp_td2 = '';
    }
    echo ' <tr>
        <th>Hình</th 
        <th style="  padding-left:20px">Sản Phẩm</th>
        <th style="padding-right:40px ; padding-left:20px">Đơn Giá</th>
        <th style="margin-right:20px ;padding-left:20px">Số Lượng</th>
        <th style="margin-right:20px ;padding-left:20px">Thành Tiền</th>
      ' . $xoasp_th . '
     </tr>';


    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart[2];
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;

        if ($del == 1) {
           
            $xoasp_td = '<td style="background-color:black padding-top:20px">
             <a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="Xóa"></a></td>';
            # code...
        } else {
            $xoasp_td = '';
          
        }

        
        echo '

        <tr style="text-align: center;">
        <td><img src="' . $hinh . '" alt="" height="80px"></td>
        <td >' . $cart[1] . '</td>
        <td>' . $cart[3] . '</td>
        <td>' . $cart[4] . '</td>
        <td>' . $ttien . '</td>
        ' . $xoasp_td . '
        </tr>';
        $i += 1;
    }
    echo '<tr>
    <div style=" color:black;padding-top:40px"> <td colspan="4" >Tổng đơn hàng</td></div>
      
        <td>' . $tong . '</td>
      
        </tr>';
}
