<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/div.css">
    <title>Document</title>
</head>
<body>
    
    <?php
        include('dbconnect.php');
        $list = "SELECT * FROM sinhvien";
        $hocbong = 0;
        $result = $conn->query($list);
        echo "<table class = tblist>";
        echo "<tr><th colspan = '7'>Danh Sách Sinh Viên</th><tr>";
        echo "<tr><th>Mã Sinh Viên</th><th>Họ Và Tên</th><th>Điện Thoại</th><th>Địa Chỉ</th><th>Điểm</th><th>Học Bổng</th><th>Action</th></tr>";
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                if($row['Diem']>=8){
                    $hocbong = 1000;
                }
                else{
                    $hocbong = 0;
                }
                echo "<tr><td>{$row['MaSV']}</td><td>{$row['HoTen']}</td><td>{$row['DienThoai']}</td><td>{$row['DiaChi']}</td><td>{$row['Diem']}</td><td>$hocbong</td>
                <td>
                <a href='delsv.php?masv={$row['MaSV']}' onclick=\"return confirm('Bạn có muốn xóa sinh viên này không');\">❌</a>
                </td>
                </tr>";
            }
        }
        echo "<tr><th colspan = '7'><a href='index.php?page=insertsv'>➕</a></th></tr>";
        echo "</table>";
    ?>
</body>
</html>