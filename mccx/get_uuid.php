<?php
// 获取用户输入的 Minecraft 用户名
$username = $_GET['username'];

// 构造 API 请求 URL
$apiUrl = "https://api.mojang.com/users/profiles/minecraft/$username";

// 发送请求并获取响应
$response = file_get_contents($apiUrl);

// 将响应数据解码为 PHP 数组
$data = json_decode($response, true);

// 如果请求失败，返回错误信息
if (!$data) {
    $error = array('error' => '获取 UUID 时出现错误。');
    header('Content-Type: application/json');
    echo json_encode($error);
    exit;
}

// 返回 JSON 响应
header('Content-Type: application/json');
echo json_encode($data);