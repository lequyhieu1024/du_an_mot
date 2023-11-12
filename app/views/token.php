<?php
function createToken($do_dai = 32)
{
    // Chuỗi ký tự có thể sử dụng để tạo token
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    // Tính độ dài của chuỗi ký tự
    $characters_length = strlen($characters);

    // Khởi tạo token
    $token = '';

    // Tạo token ngẫu nhiên bằng cách chọn ngẫu nhiên ký tự từ chuỗi
    for ($i = 0; $i < $do_dai; $i++) {
        $token .= $characters[rand(0, $characters_length - 1)];
    }

    return $token;
}
// Hàm lưu trữ token vào session
function luu_token($token)
{
    setcookie('user_token', $token,  time() + 60 * 60 * 24 * 365, '/');
}
?>
