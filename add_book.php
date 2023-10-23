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
        If yes, series name: <input type="text" name="series_name"><br>
        <div class="centered-items">Rating: <br> 
            <div class="rate">
              <input type="radio" id="star5" name="rate" value="5" />
              <label for="star5" title="text">5 stars</label>
              <input type="radio" id="star4" name="rate" value="4" />
              <label for="star4" title="text">4 stars</label>
              <input type="radio" id="star3" name="rate" value="3" />
              <label for="star3" title="text">3 stars</label>
              <input type="radio" id="star2" name="rate" value="2" />
              <label for="star2" title="text">2 stars</label>
              <input type="radio" id="star1" name="rate" value="1" />
              <label for="star1" title="text">1 star</label>
            </div>
            <br> <input type="submit" value="Add Book">
        </div>
    </form>
</body>
</html>