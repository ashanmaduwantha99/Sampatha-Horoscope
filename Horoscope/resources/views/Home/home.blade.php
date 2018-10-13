@extends('Layouts.homelayout')
@section('homecss')
    <style>
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

        #nimithi{
            background-image: url("../Media/Images/astro.jpg");
            background-positon:50% 50%;
            background-attachment:fixed;
            background-repeat:no-repeat;
            background-size:cover;
            color: yellow;
        }

        .contact {
            margin: 15px 0px;
            text-align: center;
        }

        .contact i {
            font-size: 36px;
            color: #6195FF;
            margin-bottom: 20px;
        }

        .contact-form {
            text-align: center;
            margin-top: 40px;
        }

        .contact-form .input {
            margin-bottom: 20px;
        }


        .contact-form .input:nth-child(1), .contact-form .input:nth-child(2) {
            width: calc(50% - 10px);
        }

        .contact-form .input:nth-child(2) {
            margin-left: 15px;
        }
        #comments{
            background-image: url("../Media/Images/comment.jpg");
            background-positon:50% 50%;
            background-attachment:fixed;
            background-repeat:no-repeat;
            background-size:cover;
            color: yellow;
            height: 350px;
        }
    </style>
@endsection
@section('title')Home @endsection

@section('body')
    <div class="jumbotron">
        <div class="container-fluid">
            <div class="row">
                <img src="{{URL::asset('/Media/Images/logo.png')}}" id="logo" class="img-responsive">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div id="about" class="section md-padding">

            <!-- Container -->
            <div class="container">

                <!-- Row -->
                <div class="row">

                    <!-- Section header -->
                    <div class="section-header text-center">
                        <br>
                        <h2 class="title"><b>ආයුබෝවන් සම්පත ජෝතිශ්‍ය සේවාව</b></h2>
                    </div>
                    <!-- /Section header -->

                    <!-- about -->
                    <div class="col-md-4">
                        <div class="about">
                            <i class="fa fa-cogs"></i>
                            <h3>අපගේ සේවාවන්</h3>
                            <p>අපගේ සෙවාවන් පිලිබද වැඩි විස්තර සදහා
                                <a href="#">පිවිසෙන්න</a>.</p>
                        </div>
                    </div>
                    <!-- /about -->

                    <!-- about -->
                    <div class="col-md-4">
                        <div class="about">
                            <i class="fa fa-magic"></i>
                            <h3>කාලය වෙන්කරවා ගැනීමට</h3>
                            <p>කාලය වෙන්කරවා ගැනීම සදහා සහ ආංකයක් ලබාගැනීම සදහා
                                <a href="#">පිවිසෙන්න</a></p>
                        </div>
                    </div>
                    <!-- /about -->

                    <!-- about -->
                    <div class="col-md-4">
                        <div class="about">
                            <i class="fa fa-mobile"></i>
                            <h3>අපි ගැන</h3>
                            <p>අපි ගැන දැනගන්න වැඩි විස්තර සදහා
                                <a href="#">පිවිසෙන්න</a></p>
                        </div>
                    </div>
                    <!-- /about -->

                </div>
                <!-- /Row -->

            </div>
            <!-- /Container -->

        </div>
    </div>

    <!-- /About -->
    <div class="container-fluid" id="nimithi">
        <div class="container">
            <br>
            <div class="row">
                <div class="col-md-6" >
                    <div class="section-header">
                        <h2 class="title">තත්කාල නිමිති බැලීම</h2>
                        <hr>
                    </div>
                    <p>තමන්ගේ ගෙදර දොර දෝෂ හා කරදර, හිතේ දැවෙන ප්‍රශ්ණ,
                        දරුවන්ගේ ප්‍රශ්ණ, ඉඩකඩම් වල තිබෙන වාස්තු දෝෂ,
                        දරුඵල නොමැති අයට ඇති බධා ආදී සියලු ප්‍රශ්ණ ගැන බලා ගත හැක.
                        සොරකමි හා නැති වු දේවල් ගැන බලනු නොලැබේ.</p>
                </div>

                <div class="col-md-6">
                    <img src="{{URL::asset('/Media/Images/nimithi.png')}}" id="nimithilogo" class="img-responsive" style="width: 450px;height: 450px;">
                </div>
            </div>
            <br>
        </div>
    </div>
    <div class="container-fluid" id="comments">
        <h4>Short discription about Sampatha Horosocope</h4>
    </div>
@endsection