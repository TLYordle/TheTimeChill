<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/div.css">
    <title>Document</title>
</head>
<body>
    <h2 class = "header">Thêm Sinh Viên</h3>
    <form class = "insertsv" action="" method="POST">
        <table class ='tbinsert'>
            <tr>
                <td>
                    <label for="">Mã Sinh Viên: </label><br>
                    <input type="text" name="masv" id="masv" placeholder="Nhập mã sinh viên" required> 
                </td>
                <td>
                    <label for="">Họ Và Tên:</label><br>
                    <input type="text" name="hoten" id="hoten" placeholder="Nhập họ và tên" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Số Điện Thoại: </label><br>
                    <input type="text" name="dienthoai" id="dienthoai" placeholder="Nhập số điện thoại" required>
                </td>
                <td>
                    <label for="">Địa Chỉ: </label><br>
                    <input type="text" name="diachi" id="diachi" placeholder="Nhập địa chỉ" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Điểm số: </label><br>
                    <input type="text" name="diem" id="diem" placeholder="Nhập điểm" required>
                </td>
            </tr>
            <tr>
                <th colspan = '2'>
                    <input type="submit" value = "➕ Thêm Sinh Viên">
                    <p>  </p>
                    <input type="submit" value = "↩ Về Trang chủ" onclick = "window.location.href='<?php echo'index.php?page=listsv'?>'">
                </th>
            </tr>
        </table>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            include('dbconnect.php');

            $select = "SELECT * FROM sinhvien";
            $result = $conn->query($select);
            $checkmasv = [];
            while($row = $result->fetch_assoc()){
                $checkmasv[] = $row['MaSV'];
            }

            $masv = $_POST['masv'];
            $hoten = $_POST['hoten'];
            $diachi = $_POST['diachi'];
            $dienthoai = $_POST['dienthoai'];
            $diem = $_POST['diem'];

            if(!is_numeric($masv)){
                echo "<script>alert('Mã Sinh Viên Không Hợp Lệ vui Lòng nhập lại mã Sinh Viên! mã sinh viên chỉ có ký tự số')</script>";    
            }
            else if(in_array($masv,$checkmasv)){
                echo "<script>alert('Mã sinh viên ".$masv." đã tồn tại vui lòng nhập số khác')</script>";
            }
            else{
                $insert = "INSERT INTO sinhvien (MaSV, HoTen, DienThoai, DiaChi, Diem) VALUES (?,?,?,?,?)";
                $stmt = $conn->prepare($insert);
                $stmt->bind_param("isssd",$masv,$hoten,$dienthoai,$diachi,$diem);

                if($stmt->execute()){
                    echo "<script>alert('Thêm Sinh Viên Thành Công!')</script>";
                }
                else {
                    echo "<script>alert('Error:".$stmt->error."')</script>";
                }
                $stmt->close();
                $conn->close();
            }
        }
    ?>
</body>
</html>