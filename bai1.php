<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/div.css">
    <title>Bài 1</title>
</head>
<body>
    <div class = 'bai1'>
    <form action="" method="POST">
        <label for="">Nhập 1 mảng</label>
        <input type="textbox" name="mang" id="mang"><br>
        <label for="">⚠ Các phần tử phải cách nhau 1 dấu ;</label>
        <br><br>
        <input type="submit" value = "Hiển Thị">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $mang = explode(";",$_POST["mang"]);
            $mang = array_map("trim",$mang);
            sort($mang);
            $sl = count($mang);
            if($mang == null){
                echo "<br>";
                echo "Loi hien thi du lieu";
            }
            else{
                echo "<br>";
                echo "Các phẩn từ đã được sắp xếp trong mảng là: ";
                echo "<br>";
                foreach($mang as $key){
                    echo "{$key} ";
                }
                echo "<br>";    
                echo "<br>";
                echo "Số lượng phần tử có trong mảng là: {$sl}";
            }
        }
    ?>
    </div>
</body>
</html>