<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 4</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Nhập 1 mảng</label>
        <input type="textbox" name="mang" id="mang" placeholder="Mời nhập 1 mảng"><br>
        <br>
        <label for="">⚠ Các phần tử phải cách nhau 1 dấu ';'</label>
        <label for="">⚠ Các phần tử phải là 1 số nguyên. </label>
        <br><br>
        <input type="submit" value = "Hiển Thị">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $mang = explode(";",$_POST["mang"]);
            $mang = array_map("trim",$mang);
            $count = 0;
            $math = 0;
            echo "<br>";
            echo "Mảng hiện tại: ";
            echo "<br>";
            foreach($mang as $key){
                echo "{$key} ";
            }
            foreach($mang as $check){
                if(!is_numeric($check)){
                    $count++;
                }
            }
            if($count != 0){
                echo "<br>";
                echo "<br>";
                echo "❗ Mảng đang chứa các thành phần không phải là số vui lòng nhập lại dữ liệu";
            }
            else{
                foreach($mang as $item){
                    if($item % 2 !=0){
                        $math += $item;
                    }
                }
                echo "<br>";
                echo "<br>";
                echo "Tổng của các số lẻ trong mảng là : {$math}";
            }
        }
    ?>
</body>
</html>