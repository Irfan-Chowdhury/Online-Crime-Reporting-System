<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/adminLogin.css')}}">

    {{-- source the Template= https://bootsnipp.com/snippets/bxEr2 --}}
</head>
  <body>
        <div class="container h-80">
            <div class="row align-items-center h-100">
                <div class="col-3 mx-auto">
                    <div class="text-center">
                        {{-- <img id="profile-img" class="rounded-circle profile-img-card" src="https://i.imgur.com/6b6psnA.png" /> --}}
                        <img id="profile-img" class="rounded-circle profile-img-card" src="{{asset('img/adminLogin-logo.jpg')}}" />
                        <p id="profile-name" class="profile-name-card"></p>
                        {{-- --------- Check in Seesion Message -------- --}}    
                            @if (session()->has('message'))  
                                {{-- <div class="alert alert-{{session('type')}}"> --}}
                                 <p style="color:red ">  
                                    {{ session('message')}}
                                </p> 
                                {{-- </div> --}}
                            @endif  
                        {{-- ---------------- X -------------------- --}}
                        <form action="{{route('admin.loginProcess')}}" method="post"  class="form-signin">
                            @csrf
                        
                            <input type="email" name="email" id="inputemail" class="form-control form-group" placeholder="Email" required autofocus>
                            <input type="password" name="password" id="inputPassword" class="form-control form-group" placeholder="Password" required autofocus>
                            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Enter</button>
                        </form><!-- /form -->
                    </div>
                </div>
            </div>
        </div>


    {{-- ===================  X X X X  X ====================== --}}
    
    
    {{-- <div class="container mt-5">
            <h1 class="text-center">Admin Login</h1>

            @if (session()->has('message'))  
            <div class="alert alert-{{session('type')}}">
                {{ session('message')}}
            </div>
            @endif  

        <form action="{{route('admin.loginProcess')}}" method="post">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" placeholder="name@example.com">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" value="{{ old('password') }}" placeholder="Enter password">
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Log in</button>
            </div>

        </form>
    </div> --}}


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>