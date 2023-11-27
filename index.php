<?php

// Test environment
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 1);
ini_set('log_errors', 0);

// Production environment
// error_reporting(E_ALL & ~E_NOTICE);
// ini_set('display_errors', 0);
// ini_set('log_errors', 1);

// Set up custom error log
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/PHP_project.log');

// Debugging tricky section
echo "Before breakpoint";
exit(); // Manual breakpoint
echo "After breakpoint";

// Comment out the breakpoint code
// // exit();

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Book Blog</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
  </head>
  <header>
    <nav>
      <ul>
        <div class="nav"> 
        <li><a href="index.php">Home</a></li>
        <li><a href="add_book.php">Add Book</a></li>
    </div>
        <div class="login">
        <li><a href="signin.php">Login</a></li>
        <li><a href="signup.php" >Register</a></li>
        </div>
      </ul>
    </nav>
  </header>
  <body>
    <h1>Welcome to the Bookish blog</h1>
    <a href="add_book.php">Add a New Book Entry</a>

    <h2>Recent Book Entries:</h2>

    <?php
    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "myphpproject";

    try {
        // Create a PDO connection
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Fetch recent book entries
        $stmt = $conn->query("SELECT * FROM bookentry ORDER BY created_at DESC LIMIT 5"); // Assuming you have a 'created_at' column

        // Display book entries
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<div>";
            echo "<h3>{$row['title']}</h3>";
            echo "<p>Author: {$row['author']}</p>";
            echo "<p>Genre: {$row['genre']}</p>";
            echo "<p>Series: {$row['series']}</p>";
            echo "</div>";
        }

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    } finally {
        // Close the database connection
        $conn = null;
    }
    ?>

    <!-- <p>Add Book Entry PHP code here</p> -->
  </body>
</html>
