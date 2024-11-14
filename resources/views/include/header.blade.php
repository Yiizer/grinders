<nav class="navbar bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">{{ config('app.name')}} </a>

    @auth
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout')}}">Logout</a>
      </li>
      
    @elseauth()
    <li class="nav-item">
      <a class="nav-link" href="{{ route('login')}}">Login</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('registration')}}">Registration</a>
    </li>
    @endauth


    <span class="navbar-text"> @auth {{ auth()->user()->name }} @endauth
    </span>
   


  </div>
</nav>