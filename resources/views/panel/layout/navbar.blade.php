<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="#">
        <!-- <img src="assets/images/logo.svg" alt="logo" /> -->
        <h1 class="text-light" style="text-transform: uppercase;">
          {{ ENV('APP_NAME') }}
        </h1>
      </a>
      <a class="sidebar-brand brand-logo-mini" href="#">
        <!-- <img src="assets/images/logo-mini.svg" alt="logo" /> -->
        <h1 class="text-light">L</h1>
      </a>
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle" src="https://picsum.photos/200" alt="Profile Pic">
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal">Username</h5>
              <span>Gold Member</span>
            </div>
          </div>
          <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
          <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
            <a href="profile.php" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-settings text-primary"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
              </div>
            </a>
          </div>
        </div>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="index.php">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-laptop"></i>
          </span>
          <span class="menu-title">Manage Content</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="manage_movie.php">Movies</a></li>
            <li class="nav-item"> <a class="nav-link" href="manage_show.php">Shows</a></li>
            <li class="nav-item"> <a class="nav-link" href="manage_episode.php">Episode</a></li>
          </ul>
        </div>
      </li>
  
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#add-content" aria-expanded="false" aria-controls="add-content">
          <span class="menu-icon">
            <i class="mdi mdi-laptop"></i>
          </span>
          <span class="menu-title">Add Content</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="add-content">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="add_movies.php">Movies</a></li>
            <li class="nav-item"> <a class="nav-link" href="add_show.php">Shows</a></li>
            <li class="nav-item"> <a class="nav-link" href="add_episode.php">Episode</a></li>
          </ul>
        </div>
      </li>
  
  
      <li class="nav-item menu-items">
        <a class="nav-link" href="users.php">
          <span class="menu-icon">
            <i class="mdi mdi-account-multiple-outline"></i>
          </span>
          <span class="menu-title">Manage User</span>
        </a>
      </li>
  
      <li class="nav-item menu-items">
        <a class="nav-link" href="todolist.php">
          <span class="menu-icon">
            <i class="mdi mdi-format-list-bulleted"></i>
          </span>
          <span class="menu-title">Todo List</span>
        </a>
      </li>
  
      <li class="nav-item menu-items">
        <a class="nav-link" href="settings.php">
          <span class="menu-icon">
            <i class="mdi mdi-settings"></i>
          </span>
          <span class="menu-title">settings</span>
        </a>
      </li>
    </ul>
  </nav>