<?php

//MySQLi Procedural
$conn = mysqli_connect("localhost","root","root","db_keluhan");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
