<?php

if($_POST['action'] == "Create"){

$servername = "localhost";
$username = "kevinyobeth";
$password = "kevinyobeth";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE therun";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

$conn = new mysqli($servername, $username, $password, "therun");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sqltable = "CREATE TABLE userdata (
    ID int AUTO_INCREMENT PRIMARY KEY, 
    fullname text NOT NULL,
    email text NOT NULL,
    notelp text,
    gender text,
    bloodtype text,
    idcard text,
    dateofbirth text,
    monthofbirth text,
    yearofbirth text,
    address text,
    illnesshistory text,
    emergencycontactname text,
    emergencycontactnumber text,
    emergencycontactrelation text,
    shirtsize text,
    methodofpayment text,
    verificationcode text,
    bundlingcode text)";

if (mysqli_query($conn, $sqltable)) {
    echo "Table Created";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);

header("Location: /therun/");

} else if($_POST['action'] == "Empty"){

    $servername = "localhost";
    $username = "kevinyobeth";
    $password = "kevinyobeth";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, 'therun');
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

   if (mysqli_query($conn,'TRUNCATE TABLE userdata')) {
       echo "Table Cleared";
   } else {
       echo "Error Clearing Table";
   }

   header("Location: /therun/data.php");

}
?>