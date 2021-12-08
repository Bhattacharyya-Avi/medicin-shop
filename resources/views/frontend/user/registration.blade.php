@extends('frontend.master2')

@section('contents')
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <form action="{{route('user.registration.post')}}" method="POST">
                @csrf

                <div class="form-group">
                    <label >Image</label>
                    <input name="image" type="file" class="form-control"  placeholder="Enter your profile picture.">
                    
                </div>

                <div class="form-group">
                    <label >Name</label>
                    <input name="name" type="text" class="form-control"  placeholder="Enter your name.">
                    
                </div>
                <div class="form-group">
                    <label >Address</label>
                    <input name="address" type="text" class="form-control"  placeholder="Enter your address.">
                    
                </div>
                <div class="form-group">
                    <label >Phone</label>
                    <input name="phone" type="tel" pattern="[0-9]{11}" class="form-control"  placeholder="Enter your name.">
                    
                </div>
                <div class="form-group">
                    <label >Email address</label>
                    <input name="email" type="email" class="form-control"  placeholder="Enter email">
                    
                </div>
                <div class="form-group">
                    <label >Password</label>
                    <input name="password" type="password" class="form-control"  placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
            <a href="{{route('user.login')}}"> Already have an account? Login.</a>
            <br>
        </div>
        <div class="col-sm-2">
        </div>
    </div> <br>
    
@endsection