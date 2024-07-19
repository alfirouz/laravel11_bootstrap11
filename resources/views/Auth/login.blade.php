<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Signin Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">

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
    <link href="{{ asset('/css/signin.css') }}" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form action="{{ route('auth.authenticate') }}" method="POST">
      @csrf
    <img class="mb-4" src="{{ asset('img/bootstrap-logo.svg') }}" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" name="email" placeholder="name@example.com">
      <label for="email">Email address</label>
      @error('email')
      <div class="invalid-feedback">
      {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
      <label for="password">Password</label>
      @error('password')
      <div class="invalid-feedback">
      {{ $message }}
      </div>
      @enderror
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
  </form>
</main>


    
  </body>
</html>