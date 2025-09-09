<aside class="sidebar">
    <button type="button" class="sidebar-close-btn">
        <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
    </button>
    <div>
        <a href="{{ route('admin.index') }}" class="sidebar-logo">
            <img src="{{ asset('storage/' . $settings->site_logo) }}" alt="site logo" class="light-logo">
            <img src="{{ asset('storage/' . $settings->site_logo) }}" alt="site logo" class="dark-logo">
            <img src="{{ asset('storage/' . $settings->site_logo) }}" alt="site logo" class="logo-icon">
        </a>
    </div>
    <div class="sidebar-menu-area">
        <ul class="sidebar-menu" id="sidebar-menu">
            <li class="">
                <a href="{{ route('admin.index') }}">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
                    <span>Dashboard</span>
                </a>

            </li>


            <li class="dropdown">
                <a href="javascript:void(0)">
                    <i class="ri-checkbox-multiple-blank-line text-xl me-14 d-flex w-auto"></i>
                    <span>Services</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('admin.services.index') }}"><i
                                class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Services List</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.services.create') }}"><i
                                class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Add Service</a>
                    </li>
                </ul>
            </li>

             <li class="dropdown">
                <a href="javascript:void(0)">
                    <i class="ri-checkbox-multiple-blank-line text-xl me-14 d-flex w-auto"></i>
                    <span>Bookings</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('admin.bookings.index') }}"><i
                                class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Bookings List</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="javascript:void(0)">
                    <i class="ri-checkbox-multiple-blank-line text-xl me-14 d-flex w-auto"></i>
                    <span>Banner Settings</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('admin.banners.edit') }}"><i
                                class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>Edit Banner Settings</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="flowbite:users-group-outline" class="menu-icon"></iconify-icon>
                    <span>Users</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('admin.users.index') }}"><i
                                class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Users List</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.users.create') }}"><i
                                class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Add User</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="icon-park-outline:setting-two" class="menu-icon"></iconify-icon>
                    <span>Settings</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('admin.settings.index') }}"><i
                                class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> General Settings</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
