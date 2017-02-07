<?
session_start();

//×¢Ïúsession
session_unset();
session_destroy();
header("Location: ../index.php");
exit;
?>

