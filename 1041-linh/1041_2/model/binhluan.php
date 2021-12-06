
<?php
//đẩy tên người comment
function insert_name($name){
    $sql = "insert into binhluan(name) values('$$name')";
    pdo_execute($sql);
}
//đẩy email người comment
function insert_email($email){
    $sql = "insert into binhluan(name) values('$$email')";
    pdo_execute($sql);
}
//đẩy nội dung người comment
function insert_comment($comment){
    $sql = "insert into binhluan(name) values('$$comment')";
    pdo_execute($sql);
}
//
function show_comment($result){
    $sql = "select * from binhluan";
    $result = pdo_execute($sql);
    return $result;
}
    $comment = $_POST['comment']; // thêm comment
    $sql = "INSERT INTO binhluan(comment) VALUES ('$comment')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Comment added successfully.')</script>";
    } else {
        echo "<script>alert('Comment does not add.')</script>";
    }
?>