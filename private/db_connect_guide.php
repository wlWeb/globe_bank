<?php

// This guide demonstrates the five fundamental steps
// of database interaction using PHP.

// Credentials

$dbhost = 'localhost';
$dbuser = 'globeusr';
$dbpass = 'antmatdelo';
$dbname = 'globe_bank';

// 1. Create a database connection

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// test if connection succeeded

if(mysqli_connect_errno()) {
    $msg = "Database connection failed: ";
    $msg .= mysqli_connect_error();
    $msg .= " (" . mysqli_connect_errno() . ")";
    exit($msg);
}

// 2. Perform database query

$query = "SELECT * FROM subjects";
$result_set = mysqli_query($connection, $query);

// Test if query succeeded

if(!$result_set) {
    exit("Database query failed.");
}

// 3. Use returned data (if any)

while($subject = mysqli_fetch_assoc($result_set)) {
    echo $subject["menu_name"] . "<br>";
}

$count = mysqli_num_rows($result_set);
for ($i = 0; $i < $count; $i++) {
    $subject = mysqli_fetch_assoc($result_set);
    echo $subject['menu_name'];
}

// 4. Release returned data

mysqli_free_result($result_set);

// 5. Close database connection

mysqli_close($connection);

?>
