<nav class="flex flex-col text-center sm:flex-row sm:text-left sm:justify-between py-3 px-4 sm:items-center w-full"> 
    <div class="my-2 sm:mb-0">
        <a href="/" class="text-2xl font-bold no-underline text-grey-darkest hover:text-blue-dark">Microposts</a>
    </div>
    <ul class="flex self-center">
        @auth
            <li class="no-underline text-grey-darkest hover:text-blue-dark ml-2 p-1">
                <a href="{{ route('users.show', ['id' => Auth::id()]) }}">MyProfile</a>
            </li>
            <li class="no-underline text-grey-darkest hover:text-blue-dark ml-2 p-1">
                <a href="{{ route('users.favorites', ['id' => Auth::id()]) }}">MyFavorites</a>
            </li>
            <li class="no-underline text-grey-darkest hover:text-blue-dark ml-2 p-1">
                <a href="{{ route('users.index') }}" class="nav-link">Users</a>
            </li>
            <li class="no-underline text-grey-darkest hover:text-blue-dark ml-2 p-1">
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        @else
            <li class="no-underline text-grey-darkest hover:text-blue-dark ml-2 p-1">
                <a href="{{ route('login') }}">Sign in</a>
            </li>
            <li class="no-underline text-grey-darkest hover:text-blue-dark ml-2 p-1 border border-current rounded">
                <a href="{{ route('register') }}">Sign up</a>
            </li>
        @endauth
    </ul>
</nav>