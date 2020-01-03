<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Verification</title>
</head>
<body>
    <div>
        <p>Dear {{$user->name }}, </p>

        <p>Your Account has been created succesfully... Please Click the following link for activate your account </p>
        
        <a href="{{ route('verifyEmail',$user->email_verification_token)}}">
            {{ route('verifyEmail',$user->email_verification_token)}}
        </a> 

        <br>

        <p>Thanks</p>
            
        
    </div>
</body>
</html>