<?php
include 'ham.php';

$mang = [];
$maxValue = $minValue = $tongMang = $isValueInArray = $checkValue = $mangSapXep = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tách mảng từ chuỗi nhập vào và chuyển đổi các phần tử thành số nguyên
    $mang = array_map('intval', explode(',', $_POST['mang']));
    $checkValue = intval($_POST['checkValue']);

    // Xử lý mảng
    $maxValue = timGiaTriLonNhat($mang);
    $minValue = timGiaTriNhoNhat($mang);
    $tongMang = tinhTongMang($mang);
    $isValueInArray = kiemTraPhanTuCoThuocMang($mang, $checkValue);
    $mangSapXep = sapXepMangTangDan($mang);
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Array Functions</title>
    <link rel="stylesheet" href="B2_2.css">
</head>
<body>
    <div class="container">
        <h2>Array Functions</h2>
        <form method="post">
            <label for="mang">Nhập mảng (mảng số nguyên):</label><br>
            <input type="text" id="mang" placeholder="a, b, c..." name="mang" value="<?php echo isset($_POST['mang']) ? htmlspecialchars($_POST['mang']) : ''; ?>" required><br><br>

            <label for="checkValue">Nhập giá trị cần kiểm tra:</label><br>
            <input type="text" id="checkValue" name="checkValue" value="<?php echo isset($_POST['checkValue']) ? htmlspecialchars($_POST['checkValue']) : ''; ?>" required><br><br>
            <div id="btn">
                <input type="submit" value="Xử lý">
            </div>
        </form>
        
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <div class="result">
            <table>
                <tr>
                    <td>
                        Mảng ban đầu:
                    </td>
                    <td>
                        <?php echo implode(", ", $mang); ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Giá trị lớn nhất trong mảng:
                    </td>
                    <td>
                        <?php echo $maxValue; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Giá trị nhỏ nhất trong mảng:
                    </td>
                    <td>
                        <?php echo $minValue; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Tổng các phần tử trong mảng:
                    </td>
                    <td>
                        <?php echo $tongMang; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Mảng sau khi sắp xếp:
                    </td>
                    <td>
                        <?php echo implode(", ", $mangSapXep); ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo $checkValue; ?> <?php echo $isValueInArray ? "có" : "không"; ?> trong mảng
                    </td>
                </tr>
            </table>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>
