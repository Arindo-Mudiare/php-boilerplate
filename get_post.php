<?php
 if(isset($_POST['name'])) {
   print_r($_POST);
   $name = htmlentitities($_POST['name']);
   echo $name;
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Get and post</title>
</head>
<body>
  <form action="get_post.php" class="form">
      <div>
        <label>Name</label>
        <input type="text" name="name">
      </div>
      <div>
        <label>Email</label>
        <input type="text" name="email">
      </div>
      <input type="submit" submit="submit">
  </form>
  <ul>
    <li>
      <a href=""></a>
    </li>
  </ul>
</body>
</html>