<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'Addressbook ') }}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
            </li>
        </ul>

     <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav ">
            <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
 
            @else
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle"  id="DropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"  aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu"  aria-labelledby="DropdownMenuLink" >
                    <a href="/dashboard" class="dropdown-item">Dashboard</a>
                    <a class="dropdown-item">
                        <!--<a href="/dashboard" class="dropdown-item">Dashboard</a>-->
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </a>
                </div>
            </div>
            @endif
        </ul>
    </div>

  </div>
</nav>
