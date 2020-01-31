<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href=" {{ mix('css/app.css') }} ">
  <title>Employee - Tasks</title>
</head>
<body>

  <header>

    @auth
    
      {{ Auth::user() -> name }}
      @else
      guest
    @endauth
    <br><br>

    @auth
    
      <form action=" {{ route('logout') }} " method="post">
        @csrf
        @method('POST')
        <input type="submit" value="LogOut">
      </form>
    @else
      <a href=" {{ route('login') }} ">LogIn</a>
    @endauth

  </header>

    @yield('content')

  <footer>
    footer
  </footer>
  
</body>
</html>