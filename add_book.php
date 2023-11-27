<!DOCTYPE html>
<html>
<head>
    <title>Add a new Book Entry</title>
    <link rel="stylesheet" type="text/css" href="styles.css">

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
<h1>Add a new Bookish Entry</h1>
    <form action="process_book.php" method="post">
      <label for="coverImage">Book Cover Image:</label>
      <input type="file" id="coverImage" name="coverImage" accept="image/*">
      <div id="imagePreview"></div><br>
        Author:<br> <input type="text" name="author" required><br>
        Title:<br> <input type="text" name="title" required><br>
        Genre:<br> <input type="text" name="genre" id="genre" list="genre-suggestions" required>
        <datalist id="genre-suggestions"></datalist><br>
        Series:<br> 
        <select name="series" required>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select><br>
        If yes, series name: <input type="text" name="series_name"><br>
        <!-- <div class="centered-items">Rating: <br> 
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
            </div> -->
            <br> <input type="submit" value="Add Book">
        <!-- </div> -->
    </form>
    <a href="index.php">Back to homepage</a>
    <script>
      const predefinedGenres = [
          "Science Fiction",
          "Fantasy",
          "Mystery",
          "Romance",
          "Thriller",
          "Non-fiction",
          "Biography",
          "Historical",
          "Horror",
          // Add more genres as needed
      ];
  
      const genreInput = document.getElementById('genre');
      const genreSuggestions = document.getElementById('genre-suggestions');
  
      genreInput.addEventListener('input', () => {
          const inputText = genreInput.value.toLowerCase();
          const filteredGenres = predefinedGenres.filter(genre =>
              genre.toLowerCase().includes(inputText)
          );
  
          genreSuggestions.innerHTML = '';
  
          filteredGenres.forEach(genre => {
              const option = document.createElement('option');
              option.value = genre;
              genreSuggestions.appendChild(option);
          });
      });
  
      const coverImageInput = document.getElementById('coverImage');
      const imagePreview = document.getElementById('imagePreview');
  
      coverImageInput.addEventListener('change', () => {
          const file = coverImageInput.files[0];
          if (file) {
              const reader = new FileReader();
  
              reader.onload = (e) => {
                  const preview = document.createElement('img');
                  preview.src = e.target.result;
                  preview.alt = 'Book Cover Preview';
                  imagePreview.innerHTML = ''; // Clear previous preview
                  imagePreview.appendChild(preview);
              };
  
              reader.readAsDataURL(file);
          } else {
              imagePreview.innerHTML = ''; // Clear the preview if no file is selected
          }
      });
  </script>
</body>
</html>