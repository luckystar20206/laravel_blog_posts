{{-- Sidebar Dashboard --}}
<div class="container-fluid">
  <div class="row">
    <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary d-flex flex-column">
      <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="sidebarMenuLabel">Rangga Blog Post</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="/dashboard" style="color: black">
                <span data-feather="home" style="color:black"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 active" href="/dashboard/posts" style="color: black">
                <span data-feather="file-text" style="color:black"></span>
                My Posts
              </a>
            </li>
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>ADMINISTRATOR</span>
          </h6>

          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 active" href="/dashboard/categories" style="color: black">
                <span data-feather="grid" style="color:black"></span>
                Post Categories
              </a>
            </li>
          </ul>

          <hr class="my-3">

          <ul class="nav flex-column mb-auto">
            <li class="nav-item">
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="nav-link d-flex align-items-center gap-2" style="color: black">
                  <span data-feather="log-out" style="color:black"></span> Logout
                </button>
              </form>
            </li>
          </ul>
        </div>
      </div>
      <div class="mt-auto"></div> <!-- Flexbox spacer -->
    </div>
    {{-- End Sidebar --}}

   