<?php
$db_name = "users_database";
$username = "root";
$password = "";
$servername = "localhost";
$conn = mysqli_connect("localhost", "root", "", "users_database");
// mysqli_set_charset($conn ,"utf-8");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

printf("Initial character set: %s\n", mysqli_character_set_name($conn));

/* change character set to utf8 */
if (!mysqli_set_charset($conn, "utf8")) {
    printf("Error loading character set utf8: %s\n", mysqli_error($conn));
    exit();
} else {
    printf("Current character set: %s\n", mysqli_character_set_name($conn));
}

mysqli_close($conn);
?>