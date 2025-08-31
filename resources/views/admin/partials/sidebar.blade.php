<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ url('/') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Management</div>
                <a class="nav-link" href="{{route ('jobs.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Jobs
                </a>
                <a class="nav-link" href="{{route ('job_categories.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Job Categories
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Admin User
        </div>
    </nav>
</div>
