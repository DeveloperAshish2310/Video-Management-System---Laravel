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
        <h1 class="text-light">
          {{ ENV('APP_NAME')[0] }}
        </h1>
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
              <h5 class="mb-0 font-weight-normal"> {{ Auth()->user()->username ?? '' }} </h5>
              <span>{{ AuthRole() }}</span>
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
      <li class="nav-item menu-items {{ ActiveRoute(['panel.home'],'active') }}">
        <a class="nav-link" href="{{ route('panel.home') }}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item menu-items {{ ActiveRoute(['panel.store.movie.manage','panel.store.show.manage','panel.store.episode.manage'],'active') }}">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-laptop"></i>
          </span>
          <span class="menu-title">Manage Content</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse {{ ActiveRoute(['panel.store.movie.manage','panel.store.show.manage','panel.store.episode.manage'],'show') }}" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link {{ ActiveRoute(['panel.store.movie.manage'],'active') }}" href="{{ route('panel.store.movie.manage') }}">Movies</a></li>
            <li class="nav-item"> <a class="nav-link {{ ActiveRoute(['panel.store.show.manage'],'active') }}" href="{{ route('panel.store.show.manage') }}">Shows</a></li>
            <li class="nav-item"> <a class="nav-link {{ ActiveRoute(['panel.store.episode.manage'],'active') }}" href="{{ route('panel.store.episode.manage') }}">Episode</a></li>
          </ul>
        </div>
      </li>
  
      <li class="nav-item menu-items {{ ActiveRoute(['panel.store.add.movie','panel.store.add.show','panel.store.add.episode'],'active') }}">
        <a class="nav-link" data-toggle="collapse" href="#add-content" aria-expanded="false" aria-controls="add-content">
          <span class="menu-icon">
            <i class="mdi mdi-laptop"></i>
          </span>
          <span class="menu-title">Add Content</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse {{ ActiveRoute(['panel.store.add.movie','panel.store.add.show','panel.store.add.episode'],'show') }}" id="add-content">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link {{ ActiveRoute(['panel.store.add.movie'],'active') }}" href="{{ route('panel.store.add.movie') }}">Movies</a></li>
            <li class="nav-item"> <a class="nav-link {{ ActiveRoute(['panel.store.add.show'],'active') }}" href="{{ route('panel.store.add.show') }}">Shows</a></li>
            <li class="nav-item"> <a class="nav-link {{ ActiveRoute(['panel.store.add.episode'],'active') }}" href="{{ route('panel.store.add.episode') }}">Episode</a></li>
          </ul>
        </div>
      </li>
  
  
      <li class="nav-item menu-items {{ ActiveRoute(['panel.users.index'],'active') }}">
        <a class="nav-link" href="{{ route('panel.users.index') }}">
          <span class="menu-icon">
            <i class="mdi mdi-account-multiple-outline"></i>
          </span>
          <span class="menu-title">Manage User</span>
        </a>
      </li>
  
      <li class="nav-item menu-items">
        <a class="nav-link" href="#TodoList">
          <span class="menu-icon">
            <i class="mdi mdi-format-list-bulleted"></i>
          </span>
          <span class="menu-title">Todo List</span>
        </a>
      </li>
  
      <li class="nav-item menu-items  {{ ActiveRoute(['panel.settings.index'],'active') }}">
        <a class="nav-link" href="{{ route('panel.settings.index') }}">
          <span class="menu-icon">
            <i class="mdi mdi-settings"></i>
          </span>
          <span class="menu-title">settings</span>
        </a>
      </li>
      
      <li class="nav-item menu-items {{ ActiveRoute(['panel.videoHost.index'],'active') }}">
        <a class="nav-link" href="{{ route('panel.videoHost.index') }}">
          <span class="menu-icon">
            <i class="mdi mdi-buffer"></i>
          </span>
          <span class="menu-title">Video Host</span>
        </a>
      </li>

    </ul>
  </nav>