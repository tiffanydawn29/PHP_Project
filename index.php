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
    $servername = "mysql:host=localhost";
    $username = "root";
    $password = "root";
    $dbname = "myphpproject";
    ?>

    <p>Add Book Entry PHP code here</p>
  </body>
</html>
