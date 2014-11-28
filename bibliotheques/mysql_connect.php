<?php
$db = mysqli_connect("localhost", "root", "") or die("error connecting to 127.0.0.1");
$db1 = mysqli_select_db($db, "agrur") or die("error connecting to db");
?>
