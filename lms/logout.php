
<?
session_start();
session_unset();
session_destroy();
ob_start();
header("location:C:\xampp\htdocs\lms\index.php");
ob_end_flush(); 
include 'index.php';
//include 'home.php';
exit();
?>