<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Subscription</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <style>

	    body {
	      padding-top: 40px;
	      padding-bottom: 40px;
	      background-color: #eee;
	    }

	    .form-signin {
	      max-width: 330px;
	      margin: 0 auto;
	    }

	    .form-signin .form-control {
	      position: relative;
	      height: auto;
	      padding: 10px;
	      font-size: 16px;
	    }

	    .form-signin input[type="email"] {
	      margin-bottom: 10px;
	    }

    </style>

  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="POST" action="/subscribe">

      	{{ csrf_field() }}
        <h1 class="text-center">Subscription</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="inputEmail" 
          class="form-control" placeholder="Email address" required autofocus>

        <button class="btn btn-primary btn-block" type="submit">Subscribe</button>

      </form>

    </div> <!-- container -->

  </body>
</html>

