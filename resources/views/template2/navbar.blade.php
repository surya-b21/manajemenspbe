<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container md-7">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{url('/home')}}" class="logo">
                        <img src="{{asset('template2/assets/images/logo-v3.png')}}" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="{{url('/inovasi')}}" class="nav-link {{ ($active === "inovasi") ? 'active' : '' }}">Inovasi</a></li>
                        <li class="scroll-to-section"><a href="{{url('/forum')}}" class="nav-link {{ ($active === "forum") ? 'active' : '' }}">Forum</a></li>
                        <li class="scroll-to-section"><a href="{{url('/topiks')}}" class="nav-link {{ ($active === "topiks") ? 'active' : '' }}">Topiks</a></li>
                        <li class="scroll-to-section">
                            <div class="border-first-button"><a href="{{url('/login')}}">Login</a></div>
                        </li>
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