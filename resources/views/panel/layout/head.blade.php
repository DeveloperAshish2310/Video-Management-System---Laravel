<nav class="navbar p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
      <a class="navbar-brand brand-logo-mini" href="{{ route('panel.home') }}"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-menu"></span>
      </button>
      <!-- <ul class="navbar-nav w-100">
        <li class="nav-item w-100">
          <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
            <input type="text" class="form-control" placeholder="Search products">
          </form>
        </li>
      </ul> -->
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item dropdown d-none d-lg-block">
          <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="#">+ Add New Items</a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
            <h6 class="p-3 mb-0">Add</h6>
            <div class="dropdown-divider"></div>
            <a href="{{ route('panel.store.add.movie') }}" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-file-outline text-primary"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1">Add New Movies For Stream</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="{{ route('panel.store.add.show') }}" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-web text-info"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1">Add New Shows For Stream</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="{{ route('panel.store.add.episode') }}" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-layers text-danger"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1">Add New Episode For Stream</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
          </div>
        </li>
        <li class="nav-item nav-settings d-none d-lg-block">
          <a class="nav-link" href="#TodoList" title="Manage Todo List">
            <i class="mdi mdi-view-grid"></i>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
            <div class="navbar-profile">
              <img class="img-xs rounded-circle" src="https://picsum.photos/200" alt="Profile Pic">
              <p class="mb-0 d-none d-sm-block navbar-profile-name"> {{ Auth()->user()->username ?? '' }} </p>
              <i class="mdi mdi-menu-down d-none d-sm-block"></i>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
            <h6 class="p-3 mb-0">Profile</h6>
            <div class="dropdown-divider"></div>
            <a href="{{ route('panel.users.edit',auth()->id()) }}" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-lead-pencil text-success"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject mb-1">Edit Profile</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="Login/logout.php" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-logout text-danger"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject mb-1">Log out</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-format-line-spacing"></span>
      </button>
    </div>
  </nav>