<?php
$chieuDai = $chieuRong = $dienTich = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $chieuDai = $_POST["chieuDai"];
    $chieuRong = $_POST["chieuRong"];
    if (is_numeric($chieuDai) && is_numeric($chieuRong)) {
        $dienTich = $chieuDai * $chieuRong;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Diện Tích Hình Chữ Nhật</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #FFD700; }
        form { 
            background-color: #F4A460; 
            padding: 20px; 
            margin-top: 50px;
            width: 300px; 
            border-radius: 5px;
        }
        input[type="text"], input[type="submit"] {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <h2>DIỆN TÍCH HÌNH CHỮ NHẬT</h2>
        Chiều dài: <input type="text" name="chieuDai" value="<?php echo $chieuDai;?>">
        Chiều rộng: <input type="text" name="chieuRong" value="<?php echo $chieuRong;?>">
        Diện tích: <input type="text" value="<?php echo $dienTich;?>" disabled>
        <input type="submit" value="Tính">
    </form>
</body>
</html>
