<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark"> 
        <a class="navbar-brand" href="/">Microposts</a>
         
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @auth
                    <li class="nav-item"><a href="{{ route('profile') }}" class="nav-link">Profile</a></li>
                    <li class="nav-item">
                        <form class="nav-link" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <input type="submit" value="Logout">
                        </form>
                    </li>
                @else
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Signup</a></li>
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                @endauth
            </ul>
        </div>
    </nav>
</header>