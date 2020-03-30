
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<form action="" method="post" class="form-example">
<div class="form-example">
  <label for="email">Enter your email: </label>
  <input type="text" name="email" id="email" required>
  <button type="submit">
      Verzenden
    </button>
</form> 
</body>

</html>

<?php
$email = "kimberly@example.com";


$email = filter_var($email, FILTER_SANITIZE_EMAIL);


if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("$email is a valid email address");
} else {
    echo("$email is not a valid email address");
}
?>