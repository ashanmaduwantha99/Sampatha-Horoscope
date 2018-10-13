@extends('Layouts.admininlayout')
@section('homecss')

@endsection
@section('title')Admin home @endsection

@section('body')
    <div class="jumbotron">
        <div class="container-fluid">
            <div class="row">
                <img src="{{URL::asset('/Media/Images/logo.png')}}" id="logo" class="img-responsive">
            </div>
        </div>
    </div>


@endsection