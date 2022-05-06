<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ request()->is('home') ? 'active' : '' }}">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>Home</p>
            </a>
        </li>
    </ul>
</nav>
