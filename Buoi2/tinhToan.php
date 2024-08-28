<?php
// Hàm tính tổng hai số
function tinhTong($a, $b) {
    return $a + $b;
}

// Hàm tính hiệu hai số
function tinhHieu($a, $b) {
    return $a - $b;
}

// Hàm tính tích hai số
function tinhTich($a, $b) {
    return $a * $b;
}

// Hàm tính thương hai số
function tinhThuong($a, $b) {
    if ($b == 0) {
        return "Không thể chia cho 0";
    }
    return $a / $b;
}

?>
