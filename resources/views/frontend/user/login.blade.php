@extends('frontend.master2')

@section('contents')
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <form action="{{route('user.login.post')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                {{-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> --}}
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <br><br>
            <a href="{{route('user.registration')}}" >No Account? Open One now!</a>

        </div>
        <div class="col-sm-2">
            {{-- <a href="" class="btn btn-primary"> No Account? Open one now!</a> --}}
        </div>
    </div> <br>
    
@endsection