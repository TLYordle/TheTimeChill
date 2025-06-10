<?php
    include('dbconnect.php');

    $masv = $_GET['masv'] ?? 0;

    $del = "DELETE FROM SinhVien WHERE MaSV = ?";

    $stmt = $conn->prepare($del);
    $stmt -> bind_param('i',$masv);

    if($stmt -> execute()){
        header("Location: index.php?page=listsv");
        exit;
    }
    else{
        echo "Falied Delete";
        echo "<a href='index.php?page=listsv'>Back To Home</a>";
    }
?>