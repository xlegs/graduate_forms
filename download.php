<?php
session_start();

header ("Content-Type: application/octet-stream");
header ("Content-disposition: attachment; filename=graduate_form.txt");
echo $_SESSION['file_string'];  //the string that is the file
echo "string";
?>