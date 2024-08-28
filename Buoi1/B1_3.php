<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Phép Tính Trên Hai Số</title>
    </head>
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
        #title{
            text-align: right;
            font-weight: bold;
        }
    </style>
    <body>
        <h2>PHÉP TÍNH TRÊN HAI SỐ</h2>
        <form method="post">
            <table>
                <tr>
                    <td id="title">Chọn phép tính:</td>
                    <td>
                        <input type="radio" name="operation" value="add">Cộng
                        <input type="radio" name="operation" value="subtract">Trừ
                        <input type="radio" name="operation" value="multiply">Nhân
                        <input type="radio" name="operation" value="divide">Chia
                    </td>
                </tr>
                <tr>
                    <td id="title">Số thứ nhất:</td>
                    <td><input type="text" name="number1"></td>
                </tr>
                <tr>
                    <td id="title">Số thứ hai:</td>
                    <td><input type="text" name="number2"></td>
                </tr>
                <tr>
                    <td id="title"><input type="submit" name="calculate" value="Tính"></td>
                    <td>
                        <?php
                            if (isset($_POST['calculate'])) {

                                if (!isset($_POST['operation']) || $_POST['operation'] == '') {
                                    echo "Vui lòng chọn phép tính";
                                    return;
                                }

                                $num1 = $_POST['number1'];
                                $num2 = $_POST['number2'];
                                $operation = $_POST['operation'];

                                if ($num1 === '' || $num2 === '' || !is_numeric($num1) || !is_numeric($num2)) {
                                    echo "Vui lòng nhập đầy đủ hai số hợp lệ";
                                    return;
                                }

                                switch ($operation) {
                                    case 'add':
                                        $result = $num1 + $num2;
                                        echo "Kết quả: $num1 + $num2 = $result";
                                    break;
                                    
                                    case 'subtract':
                                        $result = $num1 - $num2;
                                        echo "Kết quả: $num1 - $num2 = $result";
                                    break;
                                    
                                    case 'multiply':
                                        $result = $num1 * $num2;
                                        echo "Kết quả: $num1 * $num2 = $result";
                                    break;
                                    
                                    case 'divide':
                                        if ($num2 != 0) {
                                            $result = $num1 / $num2;
                                            echo "Kết quả: $num1 / $num2 = $result";
                                        } else {
                                            echo "Không thể chia cho 0!";
                                        }
                                    break;
                                }
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
                        <input type="radio" name="check" value="even_odd">Kiểm tra số chẵn/lẻ
                        <input type="radio" name="check" value="prime">Kiểm tra số nguyên tố
                    </td>
                </tr>
                <tr>
                    <td id="title">Số cần kiểm tra:</td>
                    <td><input type="text" name="check_number"></td>
                </tr>
                <tr>
                    <td id="title"><input type="submit" name="check_number_btn" value="Kiểm tra"></td>
                    <td>
                        <?php
                            if (isset($_POST['check_number_btn'])) {
                                $checkNumber = $_POST['check_number'];

                                if ($checkNumber === '' || !is_numeric($checkNumber)) {
                                    echo "Vui lòng nhập một số hợp lệ.";
                                    return;
                                }

                                $check = isset($_POST['check']) ? $_POST['check'] : '';

                                if ($check == 'even_odd') {
                                    if ($checkNumber % 2 == 0) {
                                        echo "$checkNumber là số chẵn.";
                                    } else {
                                        echo "$checkNumber là số lẻ.";
                                    }
                                } elseif ($check == 'prime') {
                                    $isPrime = true;
                                    if ($checkNumber < 2) {
                                        $isPrime = false;
                                    } else {
                                        for ($i = 2; $i <= sqrt($checkNumber); $i++) {
                                            if ($checkNumber % $i == 0) {
                                                $isPrime = false;
                                                break;
                                            }
                                        }
                                    }

                                    if ($isPrime) {
                                        echo "$checkNumber là số nguyên tố.";
                                    } else {
                                        echo "$checkNumber không phải là số nguyên tố.";
                                    }
                                } else {
                                    echo "Vui lòng chọn một phép kiểm tra.";
                                }
                            }
                        ?>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
