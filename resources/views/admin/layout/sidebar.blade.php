<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="{{asset('home')}}"><img src="{{asset('template_admin/assets/images/logo.svg')}}" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="{{asset('home')}}"><img src="{{asset('template_admin/assets/images/logo-mini.svg')}}" alt="logo" /></a>
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle " src="{{asset('template_admin/assets/images/faces/face15.jpg')}}" alt="">
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal">
                Admin
              </h5>
              <span>Gold Member</span>
            </div>
          </div>
          <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
          <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-settings text-primary"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-onepassword  text-info"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item"  href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-logout text-danger"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject mb-1">Log Out</p>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
              </a>
              <div class="dropdown-divider"></div>
          </div>
        </div>
      </li>
      <div class="dropdown-divider"></div>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{route('home')}}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#landlord-li" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-account
            "></i>
          </span>
          <span class="menu-title">Landlord Managment</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="landlord-li">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="#">View Landlords</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Add Landlord</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#agent-ui" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-account-box"></i>
          </span>
          <span class="menu-title">Agent Managment</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="agent-ui">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="#">View Agents</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Add Agent</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#client-ui" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-laptop"></i>
          </span>
          <span class="menu-title">Client Managment</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="client-ui">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="#">View Clients</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Add Client</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#role-ui" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-account-multiple-plus
            "></i>
          </span>
          <span class="menu-title">Role Managment</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="role-ui">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="#">View Roles</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Add Role</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#country-ui" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-map-marker-plus
            "></i>
          </span>
          <span class="menu-title">Country Managment</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="country-ui">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('country.index')}}">View Countries</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Add Country</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#state-ui" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-map-marker-radius
            "></i>
          </span>
          <span class="menu-title">State Managment</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="state-ui">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="#">View States</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Add State</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#city-ui" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-map-marker-multiple
            "></i>
          </span>
          <span class="menu-title">City Managment</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="city-ui">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="#">View Cities</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Add City</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#catagory-ui" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-note-plus"></i>
          </span>
          <span class="menu-title">Catagory Managment</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="catagory-ui">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="#">View Catagories</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Add Catagory</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#ads-ui" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-stop-circle
            "></i>
          </span>
          <span class="menu-title">Ads Managment</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ads-ui">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="#">View Ads</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Add Ads</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#package-ui" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-note-plus"></i>
          </span>
          <span class="menu-title">Package Managment</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="package-ui">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="#">View Packages</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Add Package</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>