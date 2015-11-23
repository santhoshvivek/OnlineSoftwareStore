<?php
session_start();
unset($_SESSION["username"]);  // where $_SESSION["nome"] is your own variable. if you do not have one use only this as follow **session_unset();**
echo "You have been successfully logged out";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.html">';
?>