@extends('master')
@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-4 mt-5" style="margin: 0 auto">
            <form action = "login" method="POST">
                <div class="mb-3 mt-5">
                    @csrf
                    <label for="exampleInputEmail1" class="form-label font-weight-bold">Email address</label>
                    <input type="email" name = "emailText" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="passwordText" class="form-control" >
                </div>
                
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection
