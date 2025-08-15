<?php

session_start();
require_once '../Db/db.config.php';


// --- Input Sanitization Function ---
function sanitizeInput($data) {
    return htmlspecialchars(strip_tags(trim($data)), ENT_QUOTES, 'UTF-8');
}


if (isset($_POST['login'])) {

    if (!isset($_POST['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        die("CSRF token validation failed.");
    }

    $userEmail = sanitizeInput($_POST['userEmail']);
    $password  = trim($_POST['userPassword']);

    $sql = "SELECT userId, userName, userEmail, userPassword, AdminAccess, ProfilePic 
            FROM users 
            WHERE userEmail = :userEmail 
            LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':userEmail' => $userEmail]);

    if ($stmt->rowCount() === 1) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if (password_verify($password, $user['userPassword'])) {
            $_SESSION['userLoggedIn'] = 1;
            $_SESSION['userId']       = $user['userId'];
            $_SESSION['userName']     = $user['userName'];
            $_SESSION['userEmail']    = $user['userEmail'];
            $_SESSION['AdminAccess']  = $user['AdminAccess'];
            $_SESSION['ProfilePic']   = $user['ProfilePic'];

            $_SESSION['loginSuccess'] = 1;
            header('Location: ../index.php');
            exit();
        } else {
            $_SESSION['loginError'] = 1;
            header('Location: ../index.php');
            exit();
        }
    } else {
        $_SESSION['loginError'] = 1;
        header('Location: ../index.php');
        exit();
    }
}else if(isset($_POST['register'])){

    // --- CSRF Token Validation ---
    if (!isset($_POST['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        die("CSRF token validation failed.");
    }

    

    // Sanitize incoming POST data
    $userEmail = sanitizeInput($_POST['userEmail']);
    $password  = trim($_POST['userPassword']); // Don't strip password characters

    // Check if user already exists (safe query)
    $checkSql = "SELECT 1 FROM users WHERE userEmail = :userEmail LIMIT 1";
    $checkStmt = $pdo->prepare($checkSql);
    $checkStmt->execute([':userEmail' => $userEmail]);

    if ($checkStmt->rowCount() > 0) {
        $_SESSION['userAvialable'] = 1;
        header('Location: ../index.php');
        exit();
    }

    // Hash password securely
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Extract username from email (already sanitized)
    $userName = strstr($userEmail, '@', true);

    // Generate 6-digit verification code
    $verificationCode = mt_rand(100000, 999999);

    // Expiration time (5 mins)
    $expTime = date('Y-m-d H:i:s', strtotime('+5 minutes'));

    // Insert new user securely
    $sql = "INSERT INTO users 
            (`userName`, `userEmail`, `userPassword`, `VerifiedCode`, `ExpTime`) 
            VALUES (:userName, :userEmail, :userPassword, :VerifiedCode, :ExpTime)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':userName'      => $userName,
        ':userEmail'     => $userEmail,
        ':userPassword'  => $hashedPassword,
        ':VerifiedCode'  => $verificationCode,
        ':ExpTime'       => $expTime
    ]);

    // Store session data
    $_SESSION['userRegister'] = 1;
    $_SESSION['userName'] = $userName;
    $_SESSION['userEmail'] = $userEmail;
    $_SESSION['verificaionCode'] = $verificationCode;
    $_SESSION['ProfilePic'] = 'Images/UserImages/user.png';

    // Redirect to send verification email
    header('Location: ../MailFunctions/Register.php');
    exit();

}



?>