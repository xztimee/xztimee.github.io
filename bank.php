<?php
$bank = 'mbbank';
$stk = '0848520147';
$ctk = 'TRUONG QUOC TOAN';
$ndck = 'RYDER';

if (isset($_POST['qr'])) {
    $amount = $_POST['amount'] ?? null;
    if (!$amount) {
        http_response_code(400);
        exit();
    }
    
    $ndck = urlencode($ndck);
    $qrUrl = "https://img.vietqr.io/image/$bank-$stk-qr_only.jpg?amount=$amount&addInfo=$ndck";
    
    // Khởi tạo cURL
    $ch = curl_init();
    
    // Cấu hình cURL
    curl_setopt($ch, CURLOPT_URL, $qrUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    // Thực hiện yêu cầu và lấy nội dung trả về
    $response = curl_exec($ch);
    
    // Kiểm tra lỗi và đóng cURL
    if ($response === false) {
        $error = curl_error($ch);
        curl_close($ch);
        http_response_code(500);
        exit("CURL Error: $error");
    }
    
    // Đóng cURL
    curl_close($ch);
    
    // Chuyển đổi dữ liệu thành base64
    $base64 = base64_encode($response);
    
    // Tạo mảng JSON để trả về
    $json = [
        'bank' => strtoupper($bank),
        'stk' => $stk,
        'ctk' => strtoupper($ctk),
        'amount' => number_format($amount, 0, ',', '.'),
        'qr' => $base64
    ];
    
    // Thiết lập header và trả về dữ liệu JSON
    header('Content-Type: application/json');
    http_response_code(200);
    exit(json_encode($json));
}
?>