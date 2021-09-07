  <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/page">
            <span data-feather="file-text"></span>
            Pages
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="settings"></span>
            Configuration
          </a>
        </li>
        <li class="nav-item">
          <form action="{{ route('logout') }}" method="post">
            @csrf
             <button class="nav-link">
               <span data-feather="log-out"></span>
               Sign out</button>
           </form>
        </li>
      </ul>

    </div>
  </nav>