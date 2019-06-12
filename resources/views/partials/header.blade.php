<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="{{ route('blog.index') }}" class="navbar-brand">CH</a>
            <ul class="nav navbar-nav">
                <li><a href="{{ route('blog.technology') }}">Technology</a></li>
                <li><a href="{{ route('blog.culture') }}">Culture</a></li>
                <li><a href="{{ route('blog.nature') }}">Nature</a></li>
                <li><a href="{{ route('blog.sports') }}">Sports</a></li>
                <li><a href="{{ route('blog.fashion') }}">Fashion</a></li>
            </ul>
        </div>
        <div class="loginbuttons">
                <ul class="navbar-nav ml-auto">

                @if(!Auth::check())

                <li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/register') }}">Register</a></li>

                @else
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.index') }}">Admin</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    Logout <span class="text-danger">({{Auth::user()->name}}<span/>)
                </a>
                </li>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
                </form>
                @endif
                </ul>
           </div>
    </div>
</nav>