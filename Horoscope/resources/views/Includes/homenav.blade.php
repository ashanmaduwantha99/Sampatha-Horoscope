<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-left" id="navbar_link">
                <li><a href="{{ URL::asset('home') }}"  class="smooth-scroll" id="navbar_link">ආයුබෝවන්</a></li>
                <li><a href="{{ URL::asset('service') }}" id="navbar_link">සේවාවන්</a></li>
                <li><a href="{{ URL::asset('reservation') }}" id="navbar_link">කාලය වෙන්කරවා ගැනීම</a></li>
                <li><a href="{{ URL::asset('aboutus') }}" id="navbar_link">අපි ගැන</a></li>
            </ul>
            <!--
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ URL::asset('login') }}" id="navbar_link" ><span class="glyphicon glyphicon-log-in"> </span> පිවිසෙන්න</a></li>
            </ul>
            -->
        </div>
    </div>
</nav>