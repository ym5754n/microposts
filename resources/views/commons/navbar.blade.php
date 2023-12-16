<nav class="flex flex-col text-center sm:flex-row sm:text-left sm:justify-between py-3 px-4 sm:items-center w-full"> 
    <div class="mb-2 sm:mb-0">
        <a href="/" class="text-2xl font-bold no-underline text-grey-darkest hover:text-blue-dark">Microposts</a>
    </div>
    <ul class="flex self-center">
        @auth
            <li class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2 p-1">
                <a href="{{ route('users.show', ['id' => Auth::id()]) }}" class="nav-link">Profile</a>
            </li>
            <li class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2 p-1">
                <a href="{{ route('users.index') }}" class="nav-link">Users</a>
            </li>
            <li class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2 p-1">
                <a href="{{ route('users.favorites', ['id' => Auth::id()]) }}" class="nav-link">Favorites</a>
            </li>
            <li class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2 p-1">
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        @else
            <li class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2 p-1">
                <a href="{{ route('login') }}" class="nav-link">Sign in</a>
            </li>
            <li class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2 p-1 border border-current rounded">
                <a href="{{ route('register') }}" class="nav-link">Sign up</a>
            </li>
        @endauth
    </ul>
</nav>