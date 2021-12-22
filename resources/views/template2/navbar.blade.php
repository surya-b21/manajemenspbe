<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container md-7">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{url('/home')}}" class="logo">
                        <img src="{{asset('/logo/logo-surakarta.png')}}" alt="logo-surakarta" height="80">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="{{url('/home')}}" class="nav-link {{ ($active === "home") ? 'active' : '' }}">Home</a></li>
                        <li class="scroll-to-section"><a href="{{url('/ino')}}" class="nav-link {{ ($active === "inovasi") ? 'active' : '' }}">Inovasi</a></li>
                        <li class="scroll-to-section"><a href="{{url('/forum')}}" class="nav-link {{ ($active === "forum") ? 'active' : '' }}">Forum</a></li>
                        {{-- <li class="scroll-to-section"><a href="{{url('/topiks')}}" class="nav-link {{ ($active === "topiks") ? 'active' : '' }}">Topiks</a></li> --}}

                        <?php if (Auth::check()) : ?>
                            <!-- Nav Item - User Information -->

                            <li class="nav-item dropdown border-first-button">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                    <img class="img-profile rounded-circle ms-1" width="20px" src="{{ asset('img') }}/{{ Auth::user()->user_image }}">
                                    <i class="bi bi-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="/dashboard">Profil</a></li>
                                    <li>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </a>
                                        </form>
                                    </li>

                                    {{-- <li><hr class="dropdown-divider"></li> --}}
                                    {{-- <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                                </ul>
                            </li>

                        <?php else : ?>
                            <li class="scroll-to-section">
                                <div class="border-first-button"><a href="{{url('/login')}}">Login</a></div>
                            </li>
                        <?php endif; ?>

                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->