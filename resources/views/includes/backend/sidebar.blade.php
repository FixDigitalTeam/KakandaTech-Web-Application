<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard.index') }}">
    <div class="sidebar-brand-text mx-3">Kakanda Tech</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ $head === 'Dashboard' ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('dashboard.index') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  @if (Auth::user()->roles == 'ADMIN')

  <li class="nav-item {{ $head === 'Package' ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('dashboard.package.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Package</span></a>
  </li>

  <li class="nav-item {{ $head === 'Blog' ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('dashboard.blog.index') }}">
      <i class="fas fa-fw fa-book"></i>
      <span>Blog</span></a>
  </li>

  <li class="nav-item {{ $head === 'User' ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('dashboard.user.index') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>User</span></a>
  </li>

  <li class="nav-item {{ $head === 'Product' ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('dashboard.product.index') }}">
      <i class="fas fa-fw fa-box"></i>
      <span>Product</span></a>
  </li>

  @endif


  <!-- Divider -->
  <hr class="sidebar-divider">



  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>
<!-- End of Sidebar -->