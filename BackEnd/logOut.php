<?php
session_start();

// Unset all session variables
$_SESSION = [];

// If session uses cookies, remove the session cookie
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(), 
        '', 
        time() - 42000, 
        $params["path"], 
        $params["domain"], 
        $params["secure"], 
        $params["httponly"]
    );
}

// Destroy the session
session_destroy();

// Optional: clear all other cookies set by your site
if (!empty($_COOKIE)) {
    foreach ($_COOKIE as $name => $value) {
        setcookie($name, '', time() - 3600, "/");
    }
}

// Redirect to homepage or login page
header('Location: ../index.php');
exit();
?>
