<?php
include 'db_con.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);
?>