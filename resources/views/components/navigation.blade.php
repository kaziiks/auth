<header class="navbar">
    <nav class="nav-container">
        <ul class="nav-links">
            <li><a href="/">welcome</a></li>
            <li><a href="/register">register</a></li>
            <li>
                <a href="/logout"><form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="logout-button">logout</button> 
                </form></a>
            </li>
        </ul>
    </nav>
</header>