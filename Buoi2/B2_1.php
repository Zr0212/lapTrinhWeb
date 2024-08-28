<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Phép Tính Trên Hai Số</title>
    <style>
        table {
            border-collapse: collapse;
        }
        table, th, td {
            border: none;
        }
        th, td {
            font-size: 16px;
            padding: 10px;
            text-align: left;
        }
        #title {
            text-align: right;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>PHÉP TÍNH TRÊN HAI SỐ</h2>
    <form method="post">
        <table>
            <tr>
                <td id="title">Chọn phép tính:</td>
                <td>
                    <?php 
                    if (isset($_POST['calculate'])) {
                        $operation = $_POST['operation'];
                        switch ($operation) {
                            case 'add':
                                echo "Cộng";
                                break;
                            case 'subtract':
                                echo "Trừ";
                                break;
                            case 'multiply':
                                echo "Nhân";
                                break;
                            case 'divide':
                                echo "Chia";
                                break;
                        }
                    } else { 
                    ?>
                    <input type="radio" name="operation" value="add" checked>Cộng
                    <input type="radio" name="operation" value="subtract">Trừ
                    <input type="radio" name="operation" value="multiply">Nhân
                    <input type="radio" name="operation" value="divide">Chia
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td id="title">Số thứ nhất:</td>
                <td><input type="text" name="number1" value="<?php echo isset($_POST['number1']) ? htmlspecialchars($_POST['number1']) : ''; ?>"></td>
            </tr>
            <tr>
                <td id="title">Số thứ hai:</td>
                <td><input type="text" name="number2" value="<?php echo isset($_POST['number2']) ? htmlspecialchars($_POST['number2']) : ''; ?>"></td>
            </tr>
            <tr>
                <td id="title">
                    <?php if (isset($_POST['calculate'])) { ?>
                        <input type="submit" name="reset" value="Quay lại">
                    <?php } else { ?>
                        <input type="submit" name="calculate" value="Tính">
                    <?php } ?>
                </td>
                <td>
                    <?php
                    require 'tinhToan.php';

                    if (isset($_POST['calculate'])) {
                        $a = $_POST['number1'];
                        $b = $_POST['number2'];
                        $operation = $_POST['operation'];

                        if ($a === '' || $b === '' || !is_numeric($a) || !is_numeric($b)) {
                            echo "Vui lòng nhập đầy đủ hai số hợp lệ";
                        } else {
                            switch ($operation) {
                                case 'add':
                                    echo "$a + $b = " . tinhTong($a, $b);
                                    break;
                                
                                case 'subtract':
                                    echo "$a - $b = " . tinhHieu($a, $b);
                                    break;
                                
                                case 'multiply':
                                    echo "$a * $b = " . tinhTich($a, $b);
                                    break;
                                
                                case 'divide':
                                    if ($b != 0) {
                                        echo "$a / $b = " . tinhThuong($a, $b);
                                    } else {
                                        echo "Không thể chia cho 0!";
                                    }
                                    break;
                            }
                        }
                    }

                    if (isset($_POST['reset'])) {
                        header("Location: " . $_SERVER['PHP_SELF']);
                        exit;
                    }
                    ?>
                </td>
            </tr>
        </table>
    </form>

    <h2>KIỂM TRA SỐ</h2>
    <form method="post">
        <table>
            <tr>
                <td id="title">Chọn phép kiểm tra:</td>
                <td>
                    <?php 
                    if (isset($_POST['checkbtn'])) {
                        $check = $_POST['check'];
                        switch ($check) {
                            case 'even_odd':
                                echo "Kiểm tra số chẵn/lẻ";
                                break;
                            case 'prime':
                                echo "Kiểm tra số nguyên tố";
                                break;
                        }
                    } else { 
                    ?>
                        <input type="radio" name="check" value="even_odd" checked>Kiểm tra số chẵn/lẻ
                        <input type="radio" name="check" value="prime">Kiểm tra số nguyên tố
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td id="title">Số cần kiểm tra:</td>
                <td><input type="text" name="check_number" value="<?php echo isset($_POST['check_number']) ? htmlspecialchars($_POST['check_number']) : ''; ?>"></td>
            </tr>
            <tr>
                <td id="title">
                    <?php if (isset($_POST['check'])) { ?>
                        <input type="submit" name="reset_check" value="Quay lại">
                    <?php } else { ?>
                        <input type="submit" name="checkbtn" value="Tính">
                    <?php } ?>
                </td>
                <td>
                    <?php
                    require "kiemTra.php";

                    if (isset($_POST['checkbtn'])) {
                        $number = $_POST['check_number'];
                        $check = $_POST['check'];

                        if ($number === '' || !is_numeric($number)) {
                            echo "Vui lòng nhập số hợp lệ";
                        } else {
                            if ($check == "even_odd") {
                                echo "Số $number " . (kiemTraChan($number) ? "là số chẵn" : "không phải là số chẵn");
                            } elseif ($check == "prime") {
                                echo "Số $number " . (kiemTraNguyenTo($number) ? "là số nguyên tố" : "không phải là số nguyên tố");
                            }
                        }
                    }

                    if (isset($_POST['reset_check'])) {
                        header("Location: " . $_SERVER['PHP_SELF']);
                        exit;
                    }
                    ?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
