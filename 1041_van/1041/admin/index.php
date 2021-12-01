<?php
include "../model/pdo.php";

include "../model/loaihang.php";
include "home.php";
// include "./layouts/sidebar.php";


include "../model/taikhoan.php";
include "../model/sanpham.php";
include "../model/binhluan.php";
// include "home.php";

if (isset($_GET['act'])) {

    $act = $_GET['act'];
    switch ($act) {

        case 'adddm':
            //kiểm tra click
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_loaihang($tenloai);
                $thongbao = "Thêm Thành Công";
            }
            include "danhmuc/add.php";
            # code...
            break;



        case 'listdm':

            $listloaihang = loadall_loaihang();
            include "danhmuc/list.php";
            # code...
            break;



        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                # code...
                delete_loaihang($_GET['id']);
            }
            $listloaihang = loadall_loaihang();
            include "danhmuc/list.php";
            break;



        case 'suadm':
            # code.
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_loaihang($_GET['id']);
            }

            include "danhmuc/update.php";
            break;



        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_loaihang($id, $tenloai);
                $thongbao = "Cập Nhật Thành Công";
            }
            $listloaihang = loadall_loaihang();
            include "danhmuc/list.php";
            break;



            /*control san phâm */
            /*control san phâm */
            /*control san phâm */
            /*control san phâm */
        case 'addsp':
            // kiểm tra click
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                  
                } else {
                    
                }
                insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                $thongbao = "Thêm Thành Công";
            }
            $listloaihang = loadall_loaihang();
            include "sanpham/add.php";
            
            break;

        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listloaihang = loadall_loaihang();
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include "sanpham/list.php";
           
            break;



        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                # code...
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadall_sanpham();
            include "sanpham/list.php";
            break;



        case 'suasp':
            # code.
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listloaihang = loadall_loaihang();
            include "sanpham/update.php";
            break;



        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    
                } else {
                    
                }
                update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh);
                $thongbao = "Cập Nhật Thành Công";
            }
            $listdloaihang = loadall_loaihang();
            $listsanpham = loadall_sanpham();
            include "sanpham/list.php";
            break;

            /*control khach hang */
            /*control khach hang */
            /*control khach hang */
            /*control khach hang */
            /*control khach hang */

        // case 'dskh':
        //     $listtaikhoan = loadall_taikhoan();
        //     include "taikhoan/list.php";
            
        //     break;

        // case 'xoatk':
        //     if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            
        //         delete_taikhoan($_GET['id']);
        //     }
        //     $listtaikhoan = loadall_taikhoan();
        //     include "taikhoan/list.php";
        //     break;





            /*control binh luận */
            /*control binh luận */
            /*control binh luận */
            /*control binh luận */

        // case 'dsbl':
        //     $listbinhluan = loadall_binhluan(0);
        //     include "binhluan/list.php";
            
        //     break;


    //     case 'xoabl':
    //         if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                
    //             delete_binhluan($_GET['id']);
    //         }
    //         $listbinhluan = loadall_binhluan(0);
    //         include "binhluan/list.php";
    //         break;
    //         case 'thongke':
    //             include "thongke/bieudo.php";
    //             break;
    //             default: 
    //             include "homead.php";
    }
    
} 
// include "./layouts/footer.php";
?>