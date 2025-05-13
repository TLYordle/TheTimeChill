<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/warp.css">
    <title>The Time Chill</title>
</head>
<body>
    <div class="parent">
        <div class="div1">
            <a href="index.php?page=listnv">Danh sách nhân viên</a>
        </div>
        <div class="div2">
            <h1>THE TIME CHILL</h1>
        </div>
        <div class="div3">3</div>
        <div class="div4">
            <?php
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];

                    if ($page == 'listnv') {
                        echo '<div class="div4">';
                        include 'listnv.php';
                        echo '</div>';
                    } else {
                        echo "<h2>Trang không tồn tại.</h2>";
                    }
                } else {
                    echo "<h1>Chào mừng đến với trang web của tôi!</h1>";
                }
            ?>
        </div>
    </div>
</body>
</html>
