<?php
session_start();

if (!isset($_SESSION['userEmail']) || !isset($_SESSION['verificaionCode'])) {
    die("Required session variables not set.");
}

$userEmail = $_SESSION['userEmail'];
$userName  = strstr($userEmail, '@', true);
$verificationCode = $_SESSION['verificaionCode'];

$subject = "Your MCS Computer Systems Verification Code";

$message = "
<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>
<title>Verification Code</title>
</head>
<body style='background-color: #f4f6f8; font-family: sans-serif; padding: 20px;'>
    <table align='center' cellpadding='0' cellspacing='0' style='max-width: 600px; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1); font-family: sans-serif;'>
        <tr>
            <td style='padding: 20px; text-align: center; background-color: #011A41; color: white; font-family: sans-serif;'>
                <h1 style='margin: 0; font-size: 28px; font-family: sans-serif;'>Greetings {$userName},</h1>
                <h4 style='margin: 5px 0 0; font-size: 20px; font-family: sans-serif;'>Secure Account Verification</h4>
            </td>
        </tr>
        <tr>
            <td style='padding: 20px; text-align: center; color: #011A41; font-family: sans-serif; font-size: 16px;'>
                <h5 style='font-size: 20px; margin: 0; font-family: sans-serif;'>Thank you for registering with <strong>MCS Computer Systems</strong>.</h5>
                <h5 style='font-size: 20px; margin: 10px 0 0; font-family: sans-serif;'>
                    Please use the verification code below to complete your registration.<br>
                    This code will expire in <strong>5 minutes</strong>.
                </h5>
                <div style='margin: 20px 0;'>
                    <span style='display: inline-block; font-size: 28px; letter-spacing: 4px; background: #355EFC; color: white; padding: 12px 25px; border-radius: 6px; font-family: sans-serif;'>
                        {$verificationCode}
                    </span>
                </div>
                <p style='color: rgb(172, 11, 0); font-size: 16px; font-weight: bold; font-family: sans-serif;'>
                    If you didn’t request this code, please ignore this email.
                </p>
            </td>
        </tr>
        <tr>
            <td style='padding: 15px; background: #011A41; color: white; text-align: center; font-size: 16px; font-family: sans-serif;'>
                ⚠ This verification code is valid for 5 minutes only. For assistance, contact 
                <a href='mailto:support@mcscomputers.com' style='color: #fff; font-weight: bold; font-size: 16px; font-family: sans-serif;'>support@mcscomputers.com</a>.
            </td>
        </tr>
        <hr style='border: 2px solid #355EFC; margin: 0;'>
        <tr>
            <td style='background: #011A41; color: white; text-align: center; padding: 10px; font-size: 16px; font-family: sans-serif;'>
                &copy; " . date('Y') . " MCS Computer Systems. All rights reserved.
            </td>
        </tr>
    </table>
</body>
</html>

";

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type:text/html;charset=UTF-8\r\n";
$headers .= "From: MCS Computer Systems <no-reply@mcscomputers.com>\r\n";

if (mail($userEmail, $subject, $message, $headers)) {
    echo "Verification email sent to {$userEmail}.";
    header('Location: ../index.php');
    exit();
} else {
    echo "Failed to send verification email.";
    header('Location: ../index.php');
}
?>
