<div>

    <nav>
        <ul>
            <li><a href="{{ route('films.index') }}">All Films</a></li>
            <li><a href="{{ route('films.create') }}">Add new Films</a></li>

        </ul>
    </nav>

    <main>
        @yield('content')
    </main>
</div>
