<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 3</title>
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
            $longword = "";
            $maxlenght = 0;
            echo "<br>";
            echo "Mảng hiện tại: ";
            echo "<br>";
            foreach($mang as $key){
                if(strlen($key) > $maxlenght){
                    $longword = $key;
                    $maxlenght = strlen($key);
                }
                echo "{$key} ";
            }
            echo "<br>";
            echo "<br>";
            echo "Từ dài nhất là '{$longword}' với {$maxlenght} ký tự";
        }
    ?>
</body>
</html>