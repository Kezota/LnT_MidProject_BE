<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container container-fluid">
        <a class="navbar-brand" href="/">ChipiChapa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                <a class="nav-link {{ request()->is('viewEmployee') ? 'active' : '' }}" href="/viewEmployee">View Employee</a>
                <a class="nav-link {{ request()->is('addEmployee') ? 'active' : '' }}" href="/addEmployee">Add Employee</a>
            </div>
        </div>
    </div>
</nav>
