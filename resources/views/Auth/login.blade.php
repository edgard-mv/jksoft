<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap core -->
    <script src="{{asset('js/app.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    
    <!-- Custom styles for this template -->
    <link href="{{asset('css/simple-sidebar.css')}}" rel="stylesheet">
    <link href="{{asset('css/login.css')}}" rel="stylesheet">    

    <title>Miscelánea Flor</title>
</head>
<header>
    <div class="left_area">
      <h3>Miscelánea</h3>
      <h3><span>Flor</span></h3>
    </div>
</header>
<body>
    <div class="wrapper ">
        <div id="formContent">
          <!-- Tabs Titles -->
          <!-- Icon -->
          <div class="fadeIn first">
            <span class="fas fa-user-circle" id="icon" alt="User Icon"></span>
          </div>
      
          <!-- Login Form -->
          <form action="{{ route('login') }}" method="POST">
            @csrf
            <input type="text" id="login" name="email" placeholder="Email">
            <input type="password" id="password" name="password" placeholder="Contraseña">
            <input dusk="loginButton" type="submit" value="Acceder">
          </form>
      
          <!-- Remind Passowrd -->
          {{-- <div id="formFooter">
            <a class="underlineHover" href="#">¿Olvidaste tu contraseña?</a>
          </div> --}}
      
        </div>
    </div>
</body>
</html>
