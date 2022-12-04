<header class="header">
    <nav class="navbar navbar-expand-lg py-3 bg-dash-dark-2 border-bottom border-dash-dark-1 z-index-10">
        <div class="container-fluid d-flex align-items-center justify-content-between py-1">
            <div class="navbar-header d-flex align-items-center">
                <a class="navbar-brand text-uppercase text-reset" href="{{route('admin.dashboard')}}">
                    <div class="brand-text brand-big"><strong class="text-primary">Mini</strong><strong>CRM</strong>
                    </div>
                    <div class="brand-text brand-sm"><strong class="text-primary">M</strong><strong>C</strong></div>
                </a>
                <button class="sidebar-toggle">
                    <svg class="svg-icon svg-icon-sm svg-icon-heavy transform-none">
                        <use xlink:href="#arrow-left-1"></use>
                    </svg>
                </button>
            </div>
            <ul class="list-inline mb-0">
                <li class="list-inline-item logout px-lg-2">
                    <a class="nav-link text-sm text-reset px-1 px-lg-0"
                       href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <span class="d-none d-sm-inline-block">Logout</span>
                        <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                            <use xlink:href="#disable-1"></use>
                        </svg>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </nav>
</header>
