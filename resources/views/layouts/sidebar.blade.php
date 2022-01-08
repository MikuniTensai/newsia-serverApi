<div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">
            <div class="logo">
                <a href="index.html"><img src="{{ URL::asset('../dist/assets/images/logo/logo.png')}}" alt="Logo"
                        srcset=""></a>
            </div>
            <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            {{-- {% for sidebarItem in sidebarItems %}{% if sidebarItem.isTitle %} --}}
            <li class="sidebar-title">Admin Panel</li>
            {{-- {% else %} --}}
            <li class="sidebar-item {{ Route::is('home') ? 'active' : '' }}">
                <a href="{{ url('/home') }}" class='sidebar-link'>
                    <i class="bi ">Dashboard</i>
                </a>
            </li>
            <li class="sidebar-item {{ Route::is('user.*') ? 'active' : '' }}">
                <a href="{{ url('/user') }}" class='sidebar-link'>
                    <i class="bi">User</i>
                </a>
            </li>
            <li class="sidebar-item {{ Route::is('news.*') ? 'active' : '' }}">
                <a href="{{ url('/news') }}" class='sidebar-link'>
                    <i class="bi">News</i>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('logout') }}" class='sidebar-link' onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <i class="bi">Logout</i>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
            {{-- {% endif %}{% endfor %} --}}
        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
