<?php
    // Database connection details
    $servername = "mysql:host=localhost;dbname=myphpproject";
    $username = "root";
    $password = "root";
    $dbname = "myphpproject";

    try {
        // Create a PDO connection
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            // Get form data from add_book page
        $author = $_POST['author'];
        $title = $_POST['title'];
        $genre = $_POST['genre'];
        $series = $_POST['series'];

?>