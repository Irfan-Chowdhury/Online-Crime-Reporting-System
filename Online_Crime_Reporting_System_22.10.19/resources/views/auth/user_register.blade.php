<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User Registration</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/userReg/nunito-font.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/userReg/style.css"/>
	<link href="css/userReg/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body class="form-v9">
	<div class="page-content">
        <div class="form-v9-content" style="background-image: url('img/userReg/form-v9.jpg')">
            
			<form action="{{ route('register') }}" method="POST" class="form-detail" enctype="multipart/form-data">
				{{ csrf_field() }}
				
				{{-- <a href="#"><h3 style="color: aqua"> hello I am Irfan</h3></a> --}}
				{{-- --------- Check in Seesion Message -------- --}}
				@if (session()->has('message'))  
					<h3 style="color: aqua">
						{{ session('message')}}
					</h3>
            	@endif 
        		{{-- ---------------- X -------------------- --}}
				<h2>User Registration Form</h2>
				
				<div class="form-row-total">
					<div class="form-row">
						<input type="text" name="name" id="name" class="input-text @error('name') is-invalid @enderror" placeholder="Your Name" value="{{ old('name') }}"  autocomplete="name" autofocus>
                        @error('name')
							<p style="color: red;margin: -40px 10px 10px">{{ $message }} </p>
                    	@enderror
                        
                        {{-- <p style="color: red;margin: -40px 10px 10px">{{ $message }} </p> --}}
					</div>
					
					<div class="form-row">
						<input type="text" name="email" id="email" class="input-text @error('email') is-invalid @enderror" placeholder="Your Email" value="{{ old('email') }}"  autocomplete="email"  pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
						@error('email')
							<p style="color: red;margin: -40px 10px 10px">{{ $message }} </p>
                    	@enderror
					</div>
				</div>
				
				<div class="form-row-total">
                   <div class="form-row">
						<input type="text" name="voterId" id="voterId" class="input-text @error('voterId') is-invalid @enderror" placeholder="Your voterId" value="{{ old('voterId') }}"  autocomplete="voterId">
						@error('voterId')
							<p style="color: red;margin: -40px 10px 10px">{{ $message }} </p>
                    	@enderror
					</div>



					<div class="form-row">
						<select name="gender" class="input-text" id="gender" style="background-color: #5F657B">
						  <option selected>--Select--</option>
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                          <option value="other">Other</option>
                        </select>
					</div>
                </div>
                
				<div class="form-row-total">
                   <div class="form-row">
						<input type="number" name="age" id="age" class="input-text @error('age') is-invalid @enderror" placeholder="Your age" value="{{ old('age') }}"  autocomplete="age"  >
						@error('age')
							<p style="color: red;margin: -40px 10px 10px">{{ $message }} </p>
                    	@enderror
					</div>
	               <div class="form-row">
						<input type="text" name="address" id="address" class="input-text @error('address') is-invalid @enderror" placeholder="Your address" value="{{ old('address') }}"  autocomplete="address"  >
						@error('address')
							<p style="color: red;margin: -40px 10px 10px">{{ $message }} </p>
                    	@enderror
                    </div>
                </div>
                
                <div class="form-row-total">
                   <div class="form-row">
						<input type="number" name="phone" id="phone" class="input-text @error('phone') is-invalid @enderror" placeholder="Your phone" value="{{ old('phone') }}"  autocomplete="phone"  >
						@error('phone')
							<p style="color: red;margin: -40px 10px 10px">{{ $message }} </p>
                    	@enderror
					</div>
	               <div class="form-row">
						<input type="file" name="image" id="image" class="input-text"  >
                    </div>
                </div>
                
				<div class="form-row-total">
					<div class="form-row">
						<input type="password" name="password" id="password" class="input-text @error('password') is-invalid @enderror" placeholder="Your password"  autocomplete="new-password">
						@error('password')
							<p style="color: red;margin: -40px 10px 10px">{{ $message }} </p>
                    	@enderror
				        {{-- <p style="color: red;margin: -40px 10px 10px">error </p> --}}

					</div>
					<div class="form-row">
						<input type="password" name="password_confirmation" id="password-confirm" class="input-text" placeholder="Your password-confirm"  autocomplete="new-password"  >
					</div>
				</div>
				<div class="form-row-last">
					<button type="submit">Register</button>
				</div>
				
				<div class="form-row-last">
				     <h3><a href="main.html" class="GoToMainPage">Go To Main Page</a></h3>	
				</div>
				    
				    
			</form>
			    
		</div>
	</div>
	
	<script src="js/userReg/jquery.min.js"></script>
	<script src="js/userReg/bootstrap.min.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>