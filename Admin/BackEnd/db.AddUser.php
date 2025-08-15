<?php
session_start();

require '../../Db/db.config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $userName = $_POST['userName'] ;
    $userEmail = $_POST['userEmail'] ;
    $userPassword = $_POST['userPassword'] ;
    $AccessPrivilage = $_POST['AdminAccess'] ;

    if (empty($userName) || empty($userEmail) || empty($userPassword)) {
    echo json_encode([
        "status" => "error",
        "message" => "All fields are required."
    ]);
    exit;
    }

    $checkSql = "SELECT 1 FROM users WHERE userEmail = :userEmail LIMIT 1";
    $checkStmt = $pdo->prepare($checkSql);
    $checkStmt->execute([':userEmail' => $userEmail]);

    if ($checkStmt->rowCount() > 0) {
        echo json_encode([
        "status" => "error",
        "message" => "Sorry User Already Exsit."
    ]);
        exit;
    }


    // Hash password securely
    $hashedPassword = password_hash($userPassword, PASSWORD_DEFAULT);


    // Insert new user securely
    $sql = "INSERT INTO users 
            (`userName`, `userEmail`, `userPassword` , `AdminAccess` , `VerifiedCode` , `ExpTime`  ) 
            VALUES (:userName, :userEmail, :userPassword, :AdminAccess , :VerifiedCode  , :ExpTime )";


$stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':userName'      => $userName,
        ':userEmail'     => $userEmail,
        ':userPassword'  => $hashedPassword,
        ':AdminAccess'  => $AccessPrivilage,
        ':VerifiedCode'  => 0,
        ':ExpTime'  => 0 ,
    ]);



    echo json_encode([
        "status" => "success",
        "message" => "User '$userName' added successfully!"
    ]);
    exit;

} else {

    echo "Invalid request.";
}
