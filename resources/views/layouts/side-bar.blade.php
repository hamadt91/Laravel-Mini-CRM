<nav id="sidebar">
    <div class="sidebar-header d-flex align-items-center p-4">
        <img class="avatar shadow-0 img-fluid rounded-circle"
             src="{{asset('img/avatar-6.jpg')}}" alt="">
        <div class="ms-3 title">
            <h1 class="h5 mb-1">{{auth()->user()->name}}</h1>
            <p class="text-sm text-gray-700 mb-0 lh-1">Owner</p>
        </div>
    </div>
    <span class="text-uppercase text-gray-600 text-xs mx-3 px-2 heading mb-2">Main</span>
    <ul class="list-unstyled">
        <li class="sidebar-item active">
            <a class="sidebar-link" href="{{route('admin.dashboard')}}">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                    <use xlink:href="#real-estate-1"></use>
                </svg>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="#exampledropdownDropdown" data-bs-toggle="collapse">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                    <use xlink:href="#browser-window-1"></use>
                </svg>
                <span>Company</span>
            </a>
            <ul class="collapse list-unstyled " id="exampledropdownDropdown">
                <li><a class="sidebar-link" href="{{route('admin.company.create')}}"> Create </a></li>
                <li><a class="sidebar-link" href="{{route('admin.get.company.list')}}"> View List </a></li>
            </ul>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="#employeedropdownDropdown" data-bs-toggle="collapse">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                    <use xlink:href="#browser-window-1"></use>
                </svg>
                <span>Employee</span>
            </a>
            <ul class="collapse list-unstyled " id="employeedropdownDropdown">
                <li><a class="sidebar-link" href="{{route('admin.employee.create')}}"> Create </a></li>
                <li><a class="sidebar-link" href="{{route('admin.get.employee.list')}}"> View List </a></li>
            </ul>
        </li>
    </ul>
</nav>
