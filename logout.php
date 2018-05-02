<?php
// From PHP manual on session_destroy()
// Initialize the session.
// If you are using session_name("something"), don't forget it now!
session_start();

// Unset all of the session variables.
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

header('Location: index.php');
die();

// Finally, destroy the session.
session_destroy();

/* Vanha toimimaton kikkare
session_start();
session_unset();
unset($_SESSION["username"]);
session_destroy();
$_SESSION = array();
session_write_close();
header('Location: index.php');
die();
*/
?>
