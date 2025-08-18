<?php
session_start();

require '../../Db/db.config.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $userName = $_POST['userName'] ?? '';
    $userEmail = $_POST['userEmail'] ?? '';
    $userId = $_POST['userId'] ?? '';
    $adminAccess = $_POST['AdminAccess'] ?? '';

    if (isset($_POST['passwordCheckbox']) && $_POST['passwordCheckbox'] === 'on') {
    $userPassword = $_POST['userPassword'] ?? '';
    $hashedPassword = password_hash($userPassword, PASSWORD_DEFAULT);

    $sql = "UPDATE users 
            SET userName = :userName, 
                userEmail = :userEmail, 
                userPassword = :userPassword, 
                AdminAccess = :AdminAccess
            WHERE userId = :userId";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':userName'     => $userName,
        ':userEmail'    => $userEmail,
        ':userPassword' => $hashedPassword,
        ':AdminAccess'  => $adminAccess,
        ':userId'       => $userId
    ]);

} else {
    $sql = "UPDATE users 
            SET userName = :userName, 
                userEmail = :userEmail, 
                AdminAccess = :AdminAccess
            WHERE userId = :userId";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':userName'     => $userName,
        ':userEmail'    => $userEmail,
        ':AdminAccess'  => $adminAccess,
        ':userId'       => $userId
    ]);
}

echo json_encode([
        "status" => "success",
        "message" => "User '$userName' Updated successfully!"
    ]);
        exit;

}






?>