<?php
$message = $_POST[msg];
$name = $_POST[name];
$file = fopen("chat.html", "a+");
fputs($file, "<h4>$name<//h4> : $message"); 
fclose($file);
header('Location: index.php');
?>
