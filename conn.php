<?php
     $conn = new mysqli('localhost', 'eswar', 'G_5qg#jHl4[L8UDx', 'codewars');
     if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
     }
     date_default_timezone_set("Asia/Calcutta");
?>