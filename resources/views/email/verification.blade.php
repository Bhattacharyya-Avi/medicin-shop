<!DOCTYPE html>
<html lang="en">

<body>
    <div>
        <p>Dear {{$user->name}}</p>
        <p>Your account has been created. For login to your account you need to verify first by clicking on the link</p>
        <a href="{{route('user.activate',$user->email_verification_token)}}">Click Me</a>
        <br><br>
        <p>You can also click on the link given bellow</p>
        <a href="{{route('user.activate',$user->email_verification_token)}}">{{route('user.activate',$user->email_verification_token)}}</a>
    </div>
    <br><br>
    <p>Thanks!</p>
    
</body>
</html>