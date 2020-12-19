<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Signin Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <div class="container"> 
        <form class="form-signin">
            {{ csrf_field() }}
            <img class="mb-4" src="img/favicon.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Register Bromo Travelling</h1>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="text" name="name" id="inputName" class="form-control" placeholder="Please insert your name" required autofocus>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>

            <label for="inputPassword" class="sr-only">Confirm Password</label>
            <input type="password" name="password_confirmation" id="inputPassword" class="form-control" placeholder="Confirm Password" required>
            
            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
            <p class="mt-5 mb-3 text-muted">&copy; Copyright 2020</p>
          </form>
    </div>
  </body>
</html>
