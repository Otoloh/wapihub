<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Signup Page</title>


    <!-- Bootstrap core CSS -->
<link href="<?=ROOT?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="<?=ROOT?>/assets/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form method="post">

    <?php if(!empty($errors)):?>
      <div class="alert alert-danger">
        <?= implode("<br>", $errors)?>
      </div>
    <?php endif;?>
  
    <img class="mb-4" src="<?=ROOT?>/assets/images/logo.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign Up</h1>

     <div class="form-floating">
      <input name="name" type="name" class="form-control" id="floatingInput" placeholder="name">
      <label for="floatingInput">Name</label>
    </div>

    <div class="form-floating">
      <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>

     <div class="form-floating">
      <input name="phone" type="phone" class="form-control" id="floatingInput" placeholder="phone">
      <label for="floatingInput">Phone</label>
    </div>

    </div>
    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Please Accept Terms & Conditions
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
    <a href="<?=ROOT?>">Home</a>
    <a href="<?=ROOT?>/Login">Login</a>
    <p class="mt-5 mb-3 text-muted">&copy; Wapihubplatform.com 2025</p>
  </form>
</main>


    
  </body>
</html>