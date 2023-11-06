<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Your Blog</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <form class="sign-up-form" action="includes/formhandler.php" method="post">
            <h2>Sign Up</h2>
            <div class="form-group">
                <label for="full-name">Username</label>
                <input type="text" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="pwd" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="E-Mail">
            </div>
            <button type="submit">Sign Up</button>
            <p>Already have an account? <a href="index.html">Sign in here</a></p>
        </form>
    </div>
</body>
</html>
