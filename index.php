<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">

    <title>Home</title>
  </head>
  <body>
  <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Login/Signup Form</a>
    </nav>
    <div class="bothButton">
        <div class="center">
            <button type="button" class="btn btn-primary btn-lg" onclick="myFunction()">Log in</button>
            <button type="button" class="btn btn-primary btn-lg" onclick="myFunction2()">Sign Up</button>
        </div>
    </div>
    <div id="Login_Form" class="hide">
    <div class="back">
  <div class="div-center">
    <div class="content">
      <h3>Login</h3>
      <hr />
      <form action="login.php" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" name="user" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
    </div>
    </div>
  </div>
    </div>

    <div id="Signup_Form" class="hide1">
    <div class="back">
  <div class="div-center">
    <div class="content">
      <h3>Signup Form</h3>
      <hr />
      <form action="signup.php" method="Post">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" name="user" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Sign Up</button>
      </form>
</div>
    </div>
  </div>
    </div>
    <script>
        function myFunction2() {
        var y = document.getElementById("Signup_Form");
        var x = document.getElementById("Login_Form");
        if (y.style.display === "none") {
            y.style.display = "block";
            x.style.display = "none";
        } else {
            y.style.display = "none";
        }
        }
        </script>
    <script>
        function myFunction() {
        var x = document.getElementById("Login_Form");
        var y = document.getElementById("Signup_Form");
        if (x.style.display === "none") {
            x.style.display = "block";
            y.style.display ="none"
        } else {
            x.style.display = "none";
        }
        }
    </script>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>