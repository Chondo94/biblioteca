<nav class="navbar is-dark" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="#">
      <img src="https://img2.freepng.es/20171207/f2e/library-logo-5a2954d7d97100.6829629715126581358907.jpg" width="112" height="44">
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a href="/libro" class="navbar-item">
        Libros
      </a>

      <a href="/editorial" class="navbar-item">
        Editoriales
      </a>

      <a href="/categoria" class="navbar-item">
        Categorias
      </a>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          More
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item">
            About
          </a>
          <a class="navbar-item">
            Jobs
          </a>
          <a class="navbar-item">
            Contact
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item">
            Report an issue
          </a>
        </div>
      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <nav class="navbar is-dark">
            <div class="container">
              <div class="navbar-brand">
                <a href="{{ url('/libro') }}" class="navbar-item">{{ config('app.name', 'Laravel') }}</a>

                <div class="navbar-burger burger" data-target="navMenu">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>

              <div class="navbar-menu" id="navMenu">
                <div class="navbar-start is-dark"></div>

                <div class="navbar-end">
                  @if (Auth::guest())
                  <a class="navbar-item" href="{{ route('login') }}">Login</a>

                  @else
                  <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="#">{{ Auth::user()->name }}</a>

                    <div class="navbar is-dark">
                      <div class="conteiner">
                        <div class="navbar-brand">
                          <a class="navbar-item" href="{{ route('register') }}">Register </a>
                        </div>
                      </div>
                    </div>
                    
                    <div class="navbar-dropdown">
                      <a class="navbar-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        Logout
                      </a>


                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                      </form>
                    </div>
                  </div>
                  @endif
                </div>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</nav>