<nav class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <div class="logo">
                <a class="navbar-brand" href="/"><span>R</span> ichmedz</a>
            </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav " id="">
                <li class=""><a href="/" class="">Home</a></li>
                
                @if(\route::current()->getname()=='cat')
                @else
                <li role="presentation" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                     Categories <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu text-uppercase">
                            <li><a href="/fertility">Fertility</a></li>
                            <li><a href="/hypertension">Hypertension</a></li>
                      <li><a href="/vision">Vision</a></li>
                      <li><a href="/diabetes">Diabetes</a></li>
                      <li><a href="/solution">2 in 1 Solutions</a></li>
                      <li><a href="/joint-care">Joint Care</a></li>
                      <li><a href="/weight-loss-management">Weight loss Management</a></li>
                    </ul>
                </li>
                @endif
            <li><a href="/about">About Us</a></li>
            <li><a href="/terms">Terms</a></li>
            @guest
            <li><a href="/login">Login</a></li>
            @else
            <li><a href="/dashboard">Dashboard</a></li>
            <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                                Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            @endif
            </ul>
        </div><!-- /.navbar-collapse -->	
        
    </nav>