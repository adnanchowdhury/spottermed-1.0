<?php

// Load configuration as an array. Use the actual location of your configuration file
$config = parse_ini_file('config.ini'); 

// Try and connect to the database
$conn = mysqli_connect('localhost',$config['username'],$config['password'],$config['dbname']);


// If connection was not successful, handle the error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


function db_connect() {

    // Define connection as a static variable, to avoid connecting more than once 
    static $conn;

    // Try and connect to the database, if a connection has not been established yet
    if(!isset($conn)) {
         // Load configuration as an array. Use the actual location of your configuration file
        $config = parse_ini_file('config.ini'); 
        $conn = mysqli_connect('localhost',$config['username'],$config['password'],$config['dbname']);
    }

    // If connection was not successful, handle the error
    if($conn === false) {
        // Handle error - notify administrator, log to a file, show an error screen, etc.
        return mysqli_connect_error(); 
    }
    return $conn;
}


function db_query($query) {
    // Connect to the database
    $conn = db_connect();

    // Query the database
    $result = mysqli_query($conn,$query);

    return $result;
}


function db_error() {
    $conn = db_connect();
    return mysqli_error($conn);
}


function db_select($query) {
    $rows = array();
    $result = db_query($query);

    // If query failed, return `false`
    if($result === false) {
 
        return false;
    }

    // If query was successful, retrieve all the rows into an array
    while ($row = mysqli_fetch_assoc($result)) {

        $rows[] = $row; 
    }
    return $rows;
}


// Quote in string format and escape form submitted values 
function db_quote($value) {
    $connection = db_connect();
    return "'" . mysqli_real_escape_string($connection,$value) . "'";
}

?>

