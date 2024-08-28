<?php

// Hàm kiểm tra số nguyên tố
function kiemTraNguyenTo($n) {
    if ($n < 2) {
        return true;
    } else {
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) return false;
        }
    }
    return true;
}

// Hàm kiểm tra số chẵn
function kiemTraChan($n) {
    return $n % 2 == 0;
}

?>