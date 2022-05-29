<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is("/") ? 'active' : '' }}" aria-current="page" href="{{ route("main_index") }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is("products*") ? 'active' : '' }}" href="{{ route("products_index") }}">Products</a>
                </li>
                <li>
                    <a class="nav-link {{ request()->is("posts*") ? 'active' : '' }}" href="{{ route("posts_index") }}">Posts</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
