<?
session_start();
$_SESSION["lang"] = $_POST["lang"];
session_write_close();
?>