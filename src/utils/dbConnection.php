<?php
// Database connection 
$conn = mysqli_connect('db', 'user', 'user', 'myspotify');

mysqli_set_charset($conn, "utf8");

if (!$conn) {
    echo mysqli_connect_error();
}
