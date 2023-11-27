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
    $servername = "mysql:host=localhost;dbname=myphpproject";
    $username = "root";
    $password = "root";
    $dbname = "myphpproject";

    try {
      // Create a PDO connection
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

      // Set the PDO error mode to exception
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


      // Fetch recent book entries
      $stmt = $conn->query("SELECT * FROM bookentry ORDER BY created_at DESC LIMIT 5"); 

    ?>

    <p>Add Book Entry PHP code here</p>
  </body>
</html>
