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

    // Prepare and execute SQL query
        $stmt = $conn->prepare("INSERT INTO bookentry (author, title, genre, series) VALUES (?, ?, ?, ?)");
        $stmt->bindParam(1, $author);
        $stmt->bindParam(2, $title);
        $stmt->bindParam(3, $genre);
        $stmt->bindParam(4, $series);

        $stmt->execute();

    // Close the database connection
        $conn = null;

    // Display success message
        echo "Book added successfully!";

    // Redirect to the book entry page after a delay
        header("refresh:2;url=index.php");
        exit(); 
        // Make sure to exit after sending the header
        } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
}

?>