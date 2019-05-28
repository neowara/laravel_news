<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="{{ route('blog.index') }}" class="navbar-brand">GP</a>
            <ul class="nav navbar-nav">
                <li><a href="{{ route('blog.technology') }}">Technology</a></li>
                <li><a href="{{ route('blog.culture') }}">Culture</a></li>
                <li><a href="{{ route('blog.nature') }}">Nature</a></li>
                <li><a href="{{ route('blog.sports') }}">Sports</a></li>
                <li><a href="{{ route('blog.fashion') }}">Fashion</a></li>

                <li><a href="{{ route('other.about') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>