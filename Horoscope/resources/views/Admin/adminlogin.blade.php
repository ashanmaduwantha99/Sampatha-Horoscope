@extends('Layouts.adminlayout')
@section('homecss')
<style>
#login{
    width: 300px;
}
    .form-group{

    }

</style>
@endsection
@section('title')Admin Login @endsection

@section('body')
    <div class="jumbotron">
        <div class="container-fluid">
            <div class="row">
                <img src="{{URL::asset('/Media/Images/logo.png')}}" id="logo" class="img-responsive">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $errorlogin)
                            <li>{{$errorlogin}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-md-12">
                <form action="/signin" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" name="username" placeholder="Usernmae" id="login">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" name="password" placeholder="Password" id="login">
                    </div>
                    <div class="form-group">
                        <label><input type="checkbox"> Remember me</label><br>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection