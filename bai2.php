<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 2</title>
</head>
<body>
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
            $sl = count($mang);
            if($mang == null){
                echo "<br>";
                echo "Loi hien thi du lieu";
            }
            else{
                echo "<br>";
                echo "Mảng hiện tại: ";
                echo "<br>";
                foreach($mang as $key){
                    echo "{$key} ";
                }
                echo "<br>";
                rsort($mang);
                echo "Mảng sau khi sắp xếp theo thứ tự giảm dần: ";
                echo "<br>";
                foreach($mang as $key2){
                    echo "{$key2} ";
                }
                echo "<br>";
                echo "Số lượng phần tử có trong mảng là: {$sl}";
            }
        }
    ?>
</body>
</html>