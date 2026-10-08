<aside class="admin-sidebar" id="adminSidebar" aria-label="Main navigation">
    <div class="sidebar-header">
        <a class="brand-mark d-block" href="{{ route('admin.dashboard') }}" aria-label="adminHMD dashboard">
            <h3 class="brand-icon">
                <img style="height: 45px;" class="" src="{{ asset('frontend/assets/logo/nav_logo.png') }}" alt="TourValley icon">
            </h3>
            <p class="brand-subtitle">Admin Panel</p>
        </a>
    </div>

    <nav class="sidebar-nav">
        <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' :''}}" href="{{ route('admin.dashboard') }}" aria-current="page">
            <span class="nav-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
            <span class="nav-text">Dashboard</span>
        </a>
    </nav>

    <div class="sidebar-user">
        <img class=" avatar-md sidebar-user-avatar" src="{{ asset('backend/assets/images/avatar/avatar.jpg') }}" alt="Admin">
        <strong>Admin</strong>
        <small>Active Workspace</small>
    </div>

    <div class="sidebar-footer">
        <span class="status-dot"></span>
        <span class="sidebar-footer-text">System running smoothly</span>
    </div>
</aside>