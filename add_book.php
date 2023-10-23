<!DOCTYPE html>
<html>
<head>
    <title>Add a new Book Entry</title>
    <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>

<h1>Add a new Bookish Entry</h1>
    <form action="process_book.php" method="post">
        Author:<br> <input type="text" name="author" required><br>
        Title:<br> <input type="text" name="title" required><br>
        Genre:<br> <input type="text" name="genre" required><br>
        Series:<br> 
        <select name="series" required>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select><br>

        </form>
</body>
</html>