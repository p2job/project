<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <br>
      @if(isset(Auth::user()->username))
        <div class="alert alert-success success-block">
         <strong>Welcome : {{ Auth::user()->name }}</strong><br>
         <strong>สถานะ : {{ Auth::user()->status }}</strong>
         <br />
         <a href="{{ url('login/logout') }}" class="btn btn-primary">Logout</a>
        </div>
       @else
        <script>window.location = "/main";</script>
       @endif

  </div>
  </body>
</html>
