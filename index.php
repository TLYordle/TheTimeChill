<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/div.css">
    <title>Home</title>
</head>
<body>
    <div class="parent">
        <div class = "div1">
            <h3>Nội Dung Bài 1 - 5</h3>
            <a href="index.php?page=bai1">Bài 1</a>
            <br>
            <a href="index.php?page=bai2">Bài 2</a>
            <br>
            <a href="index.php?page=bai3">Bài 3</a>
            <br>
            <a href="index.php?page=bai4">Bài 4</a>
            <br>
            <a href="index.php?page=bai5">Bài 5</a>
            <br>
            <h3>Nội Dung Bài 6</h3>
            <a href="index.php?page=listsv">Danh sách sinh viên</a>
        </div>
        <div class = "div2">
            <?php
                if(isset($_GET["page"])){
                    $page = $_GET["page"];
                    if($page == 'bai1'){
                        echo "<h1>Bài 1</h1>";
                    }
                    else if($page == 'bai2'){
                        echo "<h1>Bài 2</h1>";
                    }
                    else if($page == 'bai3'){
                        echo "<h1>Bài 3</h1>";
                    }
                    else if($page == 'bai4'){
                        echo "<h1>Bài 4</h1>";
                    }
                    else if($page == 'bai5'){
                        echo "<h1>Bài 5</h1>";
                    }
                    else if($page == 'listsv'){
                        echo "<h1>Bài 6</h1>";
                    }
                    else if($page == 'insertsv'){
                        echo "<h1>Bài 6</h1>";
                    }
                }
            ?>
        </div>
        <div class = "div3">
            <?php
                if(isset($_GET["page"])){
                    $page = $_GET["page"];
                    if($page == 'bai1'){
                        include('bai1.php');
                    }
                    else if($page == 'bai2'){
                        include('bai2.php');
                    }
                    else if($page == 'bai3'){
                        include('bai3.php');
                    }
                    else if($page == 'bai4'){
                        include('bai4.php');
                    }
                    else if($page == 'bai5'){
                        include('bai5.php');
                    }
                    else if($page == 'listsv'){
                        include('listsv.php');
                    }
                    else if($page == 'insertsv'){
                        include('insertsv.php');
                    }
                }
            ?>  
        </div>
    </div>
</body>
</html>