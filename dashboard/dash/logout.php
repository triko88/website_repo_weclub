<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: login-2.php"); // Redirecting To Home Page
}
?>