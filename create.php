
<?php
session_start();
  include('process3.php'); 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="css/bookingcalendar.css" />

    <title>Albur Website</title>
  </head>
  <body class ="bg-info">

    <input type="checkbox" name="" checked="checked">
    <span class="icon"></span>
    <ul>

        <div class = "content">
<?php if (isset($_SESSION['success'])): ?>
    <div class= "error success">
        <h3>
            <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
            ?>
        </h3>
    </div>
<?php endif ?>
<?php if (isset($_SESSION["username"])): ?>
    <p style="color: white;"><span style= "font-size: 28px; color: green;">Welcome</span> <span style= " color: yellow;"><strong><?php echo $_SESSION['username']; ?></strong></span></p><hr>
<?php endif ?>
</div><br>

           <li><a href="index2.php">Spots & Products Section</a></li>
           <li><a href="index3.php">Blog Section</a></li>
           <li><a href="index4.php">Contact Section</a></li>
           <li><a href="create.php">Create Admin</a></li>
        <li><a style ="font-size: 18px; color: red;" href="admin.php?logout='1'">Logout</a></li>
    </ul>

<div class = "container">
  <div class = "card mt-5">
    <div class = "card-header">
      <h2>Create Admin</h2>
    </div>
    <div class = "card-body">
        <div class ="alert alert success">
          <?php if (isset($_SESSION['success'])): ?>
            <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
            ?>
        </div>
      <?php endif; ?>
      <form method= "post" action="create.php">
        <div class = "form-group">
          <!-- display validation error here -->
              <?php include ('errors.php') ?>
          <label for="username">Username</label>
          <input type="text" name="username" id="name" class= "form-control" >
        </div>

        <div class = "form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class= "form-control"  >
        </div>

        <div class = "form-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" class= "form-control" autocomplete="new-password">
        </div>

        <div class = "form-group">
          <label for="password">Confirm Password</label>
          <input type="password" name="password2" id="password" class= "form-control" autocomplete="new-password" >
        </div>

          <button type="submit" name="register-btn" class="save">Create</button>
          
      </form>
    </div>
  </div>
</div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>