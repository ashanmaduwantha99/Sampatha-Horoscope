@extends('Layouts.homelayout')
@section('homecss')
<style>
    #service1{
        background-image: url("../Media/Images/as.jpg");
        background-positon:50% 50%;
        background-repeat:no-repeat;
        background-size:cover;
        color: yellow;
        height: 500px;
        margin-top: -100px;
    }
    .card{
        border-radius: 5px;
    }
    .card-body{
        background-color: #1C1D21;
        color: white;
    }
    .about {
        position: relative;
        text-align: center;
        padding: 40px 20px;
        border: 1px solid #EEE;
        margin: 15px 0px;
    }

    .about i {
        font-size: 36px;
        color: #6195FF;
        margin-bottom: 20px;
    }

    .about:after {
        content: "";
        background-color: #FF4500;
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 0%;
        z-index: -1;
        -webkit-transition: 0.2s width;
        transition: 0.2s width;
    }

    .about:hover:after {
        width: 100%;
    }

    .about h3 {
        -webkit-transition: 0.2s color;
        transition: 0.2s color;
    }

    .about:hover h3 {
        color: #fff;
    }
</style>
@endsection
@section('title')Services @endsection

@section('body')
<div class="container-fluid" id="service1">
    <div class="container-fluid" id="nimithi">
        <!--<img src="{{URL::asset('/Media/Images/as.jpg')}}" id="logo" class="img-responsive">-->
    </div>
</div>
<div class="container">

    <!-- Row -->
    <div class="row">

        <!-- Section header -->
        <div class="section-header text-center">
            <br>
            <h2 class="title"><b>සේවාවන්</b></h2>
        </div>
        <!-- /Section header -->

        <!-- about -->
        <div class="col-md-6">
            <div class="about">
                <h3>තත්කාල නිමිති බැලීම.</h3>
                <p>අප ආයතනයේ ඇති විශේෂ සේවාවකි.<br>
                    <a href="#">කාලය වෙන්කරවා ගැනීමට</a>.</p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="about">
                <h3>ජන්ම පත්‍ර සෑදීම.</h3>
                <p>නිවැරදිව සහ විශ්වාසයෙන් ජන්ම පත්ත්‍ර සාදනු ලැබේ.<br>
                    <a href="#">කාලය වෙන්කරවා ගැනීමට</a></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="about">
                <h3>පලාඵල බැලීම.</h3>
                <p>සියලු ග්‍රහ අපල බලා එයට ශාන්ති කර්ම කිරීමට නියම කිරීම<br>මල්වර පලාපල බලා නැකත් සෑදීම.<br>
                    <a href="#">කාලය වෙන්කරවා ගැනීමට</a>.</p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="about">
                <h3>සියලුම නැකත් සෑදීම.</h3>
                <p>ඉදුල්කට ගෑමට,
                    කන් ව්දීමට,
                    අකුරු කියවීමට,
                    අත්තිවාරම් දැමීමට,
                    ගෙට ගෙවදීමට නැකත්,
                    මංගල නැකත් බැලීමට,
                    සියලුම නැකත් සාදන අතර විශ්වාසයෙන් වගේම නිවැරදිව කර දෙමි.<br>
                    <a href="#">කාලය වෙන්කරවා ගැනීමට</a></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="about">
                <h3>පොරොන්දම් බැලීම.</h3>
                <p>ඉතා විශ්වාසයෙන් පොරොන්දම් බැලීම කර දෙමි.<br>
                    <a href="#">කාලය වෙන්කරවා ගැනීමට</a>.</p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="about">
                <h3>වාස්තු දෝශ බැලීම</h3>
                <p>ගෙවල් වල වාස්තු දෝශ බලා නිවැරදි කර දෙමි.<br>
                    <a href="#">කාලය වෙන්කරවා ගැනීමට</a></p>
            </div>
        </div>
    </div>

</div>

@endsection