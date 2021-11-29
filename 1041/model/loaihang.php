<?php
function insert_loaihang($tenloai){
    $sql = "insert into loaihang(name) values('$tenloai')";
    pdo_execute($sql);
}
function delete_loaihang($id){
    $sql = "delete from loaihang where id=".$id;
    pdo_execute($sql);
}
function loadall_loaihang(){
    $sql = "select * from loaihang order by id desc";
    $listloaihang=pdo_query($sql);
    return $listloaihang;
}
function loadone_loaihang($id){
    $sql = "select * from loaihang where id=".$id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_loaihang($id,$tenloai){
    $sql="update loaihang set name='".$tenloai."' where id=".$id;
    pdo_execute($sql);
}
?>