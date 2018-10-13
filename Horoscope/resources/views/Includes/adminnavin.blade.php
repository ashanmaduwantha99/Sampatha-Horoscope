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
                <li><a href="{{ URL::asset('#') }}"  class="smooth-scroll" id="navbar_link">HOME</a></li>
                <li><a href="{{ URL::asset('#') }}" id="navbar_link">Link1</a></li>
                <li><a href="{{ URL::asset('#') }}" id="navbar_link">Link2</a></li>
                <li><a href="{{ URL::asset('#') }}" id="navbar_link">Link3</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ URL::asset('logout') }}" id="navbar_link">Logout</a></li>
                <li><a href="{{ URL::asset('#') }}" id="navbar_link">username</a></li>
            </ul>
        </div>
    </div>
</nav>