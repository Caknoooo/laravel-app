<header class="navbar navbar-dark sticky-top bg-danger flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/dashboard">Cakno's Blog</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-70" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
        <form action="/logout" method="post">
            @csrf
            <button type="submit" class="nav-link px-3 bg-danger border-0">
                Logout <span data-feather="log-out"></span> 
            </button>
        </form>
    </div>
</header>
