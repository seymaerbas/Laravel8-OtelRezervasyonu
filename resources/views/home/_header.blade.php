@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp

<header>
    <div class="container-fluid">
        <div class="header d-md-flex justify-content-between align-items-center py-3 px-xl-5 px-lg-3 px-2">
            <!-- logo -->

            <!-- //logo -->
            <!-- nav -->

                <section class="contact py-2" id="contact">
                    <div class="container py-xl-2 py-lg-1">
                        <div class="search">
                            <form action="{{route('gethotel')}}" method="post" class="input-append">
                                @csrf
                                @livewire('search')
                                <button class="btn btn-dark" type="submit">Search</button>
                            </form>
                            @livewireScripts
                        </div>

                    </div>
                </section>

            <div class="nav_w3ls">

                <nav>


                    <label for="drop" class="toggle">Menu</label>

                    <input type="checkbox" id="drop" />

                    <ul class="menu">
                        <li><a href="{{route('home')}}" class="active">Home</a></li>
                        <li><a href="{{route('aboutus')}}">About Us</a></li>
                        <li><a href="{{route('faq')}}">FAQ</a></li>
                        <li><a href="{{route('references')}}">References</a></li>
                        <li>
                            <!-- First Tier Drop Down -->

                        @include('home._category')

                        <li><a href="{{route('contact')}}">Contact Us</a></li>
                        <li>
                            <!-- First Tier Drop Down -->

                            <label for="drop-2" class="toggle toogle-2">My account <span class="fa fa-angle-down" aria-hidden="true"></span>
                            </label>
                            <a href="{{route('profile')}}">My Account <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul>
                                <li>
                                    @auth
                                    <a class="dropdown-item" href="{{route('profile')}}"> <img class="img-profile rounded-circle" src="{{asset('assets')}}/admin/img/seyma.png" style="max-width: 60px">

                                        {{Auth::user()->name }}
                                        <br>
                                        {{Auth::user()->roles->pluck('name') }}
                                    </a>
                                    @endauth
                                </li>
                                <li>
                                    @guest
                                    <a href="/login" class="dropdown-item" >
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Login
                                    </a>
                                    @endguest
                                </li>
                                <li>
                                    @guest
                                    <a href="/register" class="dropdown-item" >
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                      Join
                                    </a>
                                    @endguest
                                </li>
                                <li>

                                    <a href="/contact" class="dropdown-item" >
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        My message
                                    </a>

                                </li>
                                <li>

                                    <a href="{{route('user_rezerve')}}" class="dropdown-item" >
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        My rezervation
                                    </a>

                                </li>
                                <li>

                                        <a href="{{route('user_review')}}" class="dropdown-item" >
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                         Review
                                        </a>

                                </li>
                                <li>

                                        <a href="{{route('logout')}}" class="dropdown-item" >
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Logout
                                        </a>

                                </li>


                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- //nav -->
        </div>
    </div>
</header>
<!-- //header -->
