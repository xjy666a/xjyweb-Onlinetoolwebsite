<?php
session_start();

// 连接数据库
$servername = "数据库服务器";
$username = "用户名";
$password = "密码";
$database = "数据库";

$conn = new mysqli($servername, $username, $password, $database);

// 检查连接是否成功
if ($conn->connect_error) {
    die("连接数据库失败: " . $conn->connect_error);
}

// 检查用户是否已登录
if (isset($_SESSION['username'])) {
    $loggedInUser = $_SESSION['username'];
 
    $sql = "SELECT COUNT(*) AS unread_count FROM messages WHERE receiver_name = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $loggedInUser);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$unreadMessages = $row['unread_count'];
    // 查询用户会员状态、到期时间和用户组
//请根据自己数据库逻辑和需求

    
    // 根据用户组值进行处理
//请根据自己数据库逻辑和需求


    // 将用户组存入会话
//请根据自己数据库逻辑和需求

    // 检查用户会员是否到期
//请根据自己数据库逻辑和需求
    }
} else {
    $loggedInUser = '';
    $isMember = 0;
    $userGroupText = '';
}
?>

<style>
.unread-badge {
    background-color: red;
    color: white;
    border-radius: 50%;
    padding: 2px 6px;
    font-size: 12px;
    margin-left: 5px;
    line-height: 1; /* 设置行高为 1,确保小红点垂直居中 */
}
    .top-bar {
        width: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        padding: 10px;
        display: flex;
        justify-content: space-between;
        position: sticky;
        top: 0;
        z-index: 100;
    }
    .top-bar a {
        color: #fff; /* 将文字颜色改为白色 */
        text-decoration: none;
        margin-left: 20px;
    }
    .top-bar a:hover {
        color: #000;
    }
    .member-info {
        color: #fff; /* 将会员信息文字颜色改为白色 */
        margin-right: 20px;
    }
    #footer {
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        padding: 10px;
        text-align: center;
        width: 100%;
    }
.nav-link {
    display: inline-flex;
    align-items: center; /* 垂直居中对齐 */
    height: 23px; /* 设置所有导航链接的高度为 30px */
    padding: 0 10px; /* 添加一些内边距 */
    color: #fff;
    text-decoration: none;
}
</style>

<div class="top-bar">
    <?php if ($loggedInUser): ?>
        <span class="member-info">
            欢迎, //请根据自己数据库逻辑和需求
//请根据自己数据库逻辑和需求
        </span>
//请根据自己数据库逻辑和需求
    站内信
//请根据自己数据库逻辑和需求
//请根据自己数据库逻辑和需求
    <?php else: ?>
//请根据自己数据库逻辑和需求
    <?php endif; ?>
//请根据自己数据库逻辑和需求
</div>

