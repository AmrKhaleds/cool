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

            {{-- Dashboard --}}
            <li>
                <a href="{{ route('admin.index') }}">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
                    <span>Dashboard</span>
                </a>
            </li>

            {{-- Services --}}
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="mdi:briefcase-outline" class="menu-icon"></iconify-icon>
                    <span>Services</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('admin.services.index') }}">
                            <iconify-icon icon="ri:circle-fill" class="circle-icon text-primary-600"></iconify-icon>
                            Services List
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.services.create') }}">
                            <iconify-icon icon="ri:circle-fill" class="circle-icon text-primary-600"></iconify-icon>
                            Add Service
                        </a>
                    </li>
                </ul>
            </li>

            {{-- Bookings --}}
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="mdi:calendar-check-outline" class="menu-icon"></iconify-icon>
                    <span>Bookings</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('admin.bookings.index') }}">
                            <iconify-icon icon="ri:circle-fill" class="circle-icon text-primary-600"></iconify-icon>
                            Bookings List
                        </a>
                    </li>
                </ul>
            </li>

            {{-- Banner Settings --}}
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="mdi:image-outline" class="menu-icon"></iconify-icon>
                    <span>Banner Settings</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('admin.banners.edit') }}">
                            <iconify-icon icon="ri:circle-fill" class="circle-icon text-primary-600"></iconify-icon>
                            Edit Banner Settings
                        </a>
                    </li>
                </ul>
            </li>

            {{-- Why Choose Us Settings --}}
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="mdi:star-outline" class="menu-icon"></iconify-icon>
                    <span>Why Choose Us Settings</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('admin.why-choose-us.edit') }}">
                            <iconify-icon icon="ri:circle-fill" class="circle-icon text-primary-600"></iconify-icon>
                            Edit Why Choose Us Settings
                        </a>
                    </li>
                </ul>
            </li>

            {{-- Numbers --}}
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="mdi:briefcase-outline" class="menu-icon"></iconify-icon>
                    <span>Numbers Settings</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('admin.numbers.index') }}">
                            <iconify-icon icon="ri:circle-fill" class="circle-icon text-primary-600"></iconify-icon>
                            Numbers List
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.numbers.create') }}">
                            <iconify-icon icon="ri:circle-fill" class="circle-icon text-primary-600"></iconify-icon>
                            Add Number
                        </a>
                    </li>
                </ul>
            </li>

            {{-- Reviews --}}
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="mdi:briefcase-outline" class="menu-icon"></iconify-icon>
                    <span>Reviews</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('admin.reviews.index') }}">
                            <iconify-icon icon="ri:circle-fill" class="circle-icon text-primary-600"></iconify-icon>
                            Reviews List
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.reviews.create') }}">
                            <iconify-icon icon="ri:circle-fill" class="circle-icon text-primary-600"></iconify-icon>
                            Add Review
                        </a>
                    </li>
                </ul>
            </li>

            {{-- Users --}}
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="flowbite:users-group-outline" class="menu-icon"></iconify-icon>
                    <span>Users</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('admin.users.index') }}">
                            <iconify-icon icon="ri:circle-fill" class="circle-icon text-primary-600"></iconify-icon>
                            Users List
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.users.create') }}">
                            <iconify-icon icon="ri:circle-fill" class="circle-icon text-primary-600"></iconify-icon>
                            Add User
                        </a>
                    </li>
                </ul>
            </li>

            {{-- Settings --}}
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="icon-park-outline:setting-two" class="menu-icon"></iconify-icon>
                    <span>Settings</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('admin.settings.index') }}">
                            <iconify-icon icon="ri:circle-fill" class="circle-icon text-primary-600"></iconify-icon>
                            General Settings
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</aside>
