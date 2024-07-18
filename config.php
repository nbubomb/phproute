<?php
session_start();
include "connection.php";
include "function.php";

if(isset($_SESSION["lang"])){
    $_SESSION["lang"] = $_SESSION["lang"];
}else{
    $_SESSION["lang"] = "th";
}

if ($_SESSION["lang"] == "en") {
    include "language/en.php";
} else {
    include "language/th.php";
}
?>