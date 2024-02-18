<nav class="navbar navbar-expand-lg bg-dark bg-gradient ">
    <div class="container-fluid">
       
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="/home">Home</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link text-light" href="/student">Student</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/grade">Grades</a>
                </li>
               
            </ul>
            <div class="navbar-nav ms-auto">
       

        @auth
          <li c`lass="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle text-light" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Hi, {{ auth()->user()->name ?? "ah" }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a href="/dashboard/student" class="dropdown-item ">Dashboard</a>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form method="post" action="/logout">
                  @csrf
                  <button type="submit" class="dropdown-item">Logout</button>
                </form>
              </li>
            </ul>
          </li>`
        @else
          <a class="nav-link text-light" href="/login">Login</a>
          <a class="nav-link text-light" href="/register">Register</a>
        @endauth

      </div>

          
        </div>
    </div>
</nav>
