<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <title>{{ config('app.name', 'Laravel') }}</title>
        
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
        <link href="{{ asset('css/nav.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css" />
        
    </head>
    <body class="antialiased">
        <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 left-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div>Swapnil</div>

        </div> -->
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex" href="{{ url('/') }}">
                    <!-- <img src="/svg/logo.svg" style="height: 25px; border-right: 1px solid #333" class="pr-3"> -->
                    <div class="pl-3">kabKaise</div>
                </a>
        
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li>
                            <a class="nav-link" href="{{ url('/') }}">
                                Home
                            </a>
                        </li>
                        <li>
                            <a class="nav-link nav-link-down" href="{{ url('/') }}">
                                Category
                            </a>
                            <ul class="dropDownNavDiv">
                                <div style="padding: 8px;">
                                    <li>
                                        <a href="#">Entertainment</a>
                                    </li>
                                    <li>
                                        <a href="#">Technology</a>
                                    </li>
                                    <li>
                                        <a href="#">Sports</a>
                                    </li>
                                    <li>
                                        <a href="#">Business</a>
                                    </li>
                                    <li>
                                        <a href="#">Trending</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-link nav-link-down" href="{{ url('/') }}">
                                Post
                            </a>
                            <ul class="dropDownNavDiv">
                                <div style="padding: 8px;">
                                    <li>
                                        <a href="#">General</a>
                                    </li>
                                    <li>
                                        <a href="#">Featuring</a>
                                    </li>
                                    <li>
                                        <a href="#">Trending</a>
                                    </li>
                                    <li>
                                        <a href="#">Hot</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ url('/') }}">
                                World
                            </a>
                        </li>
                        <li>
                            <a class="nav-link nav-link-down" href="{{ url('/') }}">
                                Pages
                            </a>
                            <ul class="dropDownNavDiv">
                                <div style="padding: 8px;">
                                    <li>
                                        <a href="#">Contact Us</a>
                                    </li>
                                    <li>
                                        <a href="#">About Us</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
        
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('LogIn') }}</a>
                        </li>
                        @endif
        
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">SignUp</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->username }}
                            </a>
        
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/profile/{{ Auth::user()->id }}">Profile</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
        
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="mt-5"></div>
        <div class="recentNews">
            <div class="recentNewsCont">
                <div class="bigBanRecntN">
                    <img src="https://quomodosoft.com/html/newsprk/assets/img/header/sider-top2.jpg" alt="mainImg" class="w-100">
                    <div class="bigBanRecntN_cntnt">
                        <div class="bigBanRecntN_tagNdt">
                            <span class="bigBanRecntN_tag">Entertainment</span>
                            <span class="bigBanRecntN_dt">May 4, 2021</span>
                        </div>
                        <div class="bigBanRecntN_title">There may be no consoles in the future ea exec says</div>
                        <div class="bigBanRecntN_desc">The property, complete with 30-seat screening from room, a 100-seat amphitheater and a swimming pond with sandy shower</div>
                    </div>    
                </div>
                <div class="sideRecntN">
                    <div class="sideRecentCont">
                        <div class="sideRecentCont_img">
                            <img src="https://quomodosoft.com/html/newsprk/assets/img/header/widget/tab1.jpg" alt="image" class="w-100">
                        </div>
                        <div class="sideRecentCont_desc">
                            <div class="sideRecentCont_tagNdt">
                                <span class="sideRecentCont_tag">Technology</span>
                                <span class="sideRecentCont_dt">May 5, 2021</span>
                            </div>
                            <div class="sideRecentCont_title">Copa America: Luis Suarez from devastated US</div>
                        </div>
                    </div>
                    <div class="sideRecentCont">
                        <div class="sideRecentCont_img">
                            <img src="https://quomodosoft.com/html/newsprk/assets/img/header/widget/tab1.jpg" alt="image" class="w-100">
                        </div>
                        <div class="sideRecentCont_desc">
                            <div class="sideRecentCont_tagNdt">
                                <span class="sideRecentCont_tag">Technology</span>
                                <span class="sideRecentCont_dt">May 5, 2021</span>
                            </div>
                            <div class="sideRecentCont_title">Copa America: Luis Suarez from devastated US</div>
                        </div>
                    </div>
                    <div class="sideRecentCont">
                        <div class="sideRecentCont_img">
                            <img src="https://quomodosoft.com/html/newsprk/assets/img/header/widget/tab1.jpg" alt="image" class="w-100">
                        </div>
                        <div class="sideRecentCont_desc">
                            <div class="sideRecentCont_tagNdt">
                                <span class="sideRecentCont_tag">Technology</span>
                                <span class="sideRecentCont_dt">May 5, 2021</span>
                            </div>
                            <div class="sideRecentCont_title">Copa America: Luis Suarez from devastated US</div>
                        </div>
                    </div>
                    <div class="sideRecentCont">
                        <div class="sideRecentCont_img">
                            <img src="https://quomodosoft.com/html/newsprk/assets/img/header/widget/tab1.jpg" alt="image" class="w-100">
                        </div>
                        <div class="sideRecentCont_desc">
                            <div class="sideRecentCont_tagNdt">
                                <span class="sideRecentCont_tag">Technology</span>
                                <span class="sideRecentCont_dt">May 5, 2021</span>
                            </div>
                            <div class="sideRecentCont_title">Copa America: Luis Suarez from devastated US</div>
                        </div>
                    </div>
                    <div class="sideRecentCont">
                        <div class="sideRecentCont_img">
                            <img src="https://quomodosoft.com/html/newsprk/assets/img/header/widget/tab1.jpg" alt="image" class="w-100">
                        </div>
                        <div class="sideRecentCont_desc">
                            <div class="sideRecentCont_tagNdt">
                                <span class="sideRecentCont_tag">Technology</span>
                                <span class="sideRecentCont_dt">May 5, 2021</span>
                            </div>
                            <div class="sideRecentCont_title">Copa America: Luis Suarez from devastated US</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="featuredNews">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            
                <ol class="carousel-indicators">
                    @foreach( $photos as $photo )
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}"
                        class="{{ $loop->first ? 'active' : '' }}"></li>
                    @endforeach
                </ol>
            
                <div class="carousel-inner" role="listbox">
                    @foreach( $photos as $photo )
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <img class="d-block img-fluid" src="{{ $photo->image }}" alt="{{ $photo->title }}">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>{{ $photo->title }}</h3>
                            <p>{{ $photo->description }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div> -->
        <div class="mt-5"></div>
        <div class="featuredNews">
            <div class="newsBlockHead">Featured News</div>
            <div class="featOwl owl-feat-carousel owl-carousel owl-theme">
                <div class="featNewsDiv">
                    <img src="https://quomodosoft.com/html/newsprk/assets/img/header/widget/tab1.jpg" alt="image" class="w-100">
                    <div class="featNewsContent">
                        <div class="featNewsTagNDt">Technology / March 05</div>
                        <div class="featNewsTitle">Best garden wing supplies</div>
                    </div>
                </div>
                <div class="featNewsDiv">
                    <img src="https://quomodosoft.com/html/newsprk/assets/img/header/widget/tab1.jpg" alt="image" class="w-100">
                    <div class="featNewsContent">
                        <div class="featNewsTagNDt">Technology / March 05</div>
                        <div class="featNewsTitle">Best garden wing supplies</div>
                    </div>
                </div>
                <div class="featNewsDiv">
                    <img src="https://quomodosoft.com/html/newsprk/assets/img/feature/feature3.jpg" alt="image" class="w-100">
                    <div class="featNewsContent">
                        <div class="featNewsTagNDt">Technology / March 05</div>
                        <div class="featNewsTitle">Best garden wing supplies</div>
                    </div>
                </div>
                <div class="featNewsDiv">
                    <img src="https://quomodosoft.com/html/newsprk/assets/img/feature/feature4.jpg" alt="image" class="w-100">
                    <div class="featNewsContent">
                        <div class="featNewsTagNDt">Technology / March 05</div>
                        <div class="featNewsTitle">Best garden wing supplies</div>
                    </div>
                </div>
                <div class="featNewsDiv">
                    <img src="https://quomodosoft.com/html/newsprk/assets/img/trending/trendbig2.jpg" alt="image" class="w-100">
                    <div class="featNewsContent">
                        <div class="featNewsTagNDt">Technology / March 05</div>
                        <div class="featNewsTitle">Best garden wing supplies</div>
                    </div>
                </div>
            </div>
            
        </div>


        <div class="mt-5"></div>
        <div class="trendNews">
            <div class="row">
                <div class="col-8">
                    <div class="newsBlockHead">Trending News</div>
                    <div class="trendOwl owl-trend-carousel owl-carousel owl-theme">
                        <div class="trensNewsDiv">
                            <div style="height: 260px">
                                <img src="https://quomodosoft.com/html/newsprk/assets/img/header/widget/tab1.jpg" alt="image" class="w-100">
                            </div>
                            <div class="trendNewsContent">
                                <div class="trendNewsTagNDt">
                                    <span class="trendNews_tag">Technology</span>
                                    <span class="trendNews_dt">May 5, 2021</span>
                                </div>
                                <div class="trendNewsTitle">Best garden wing supplies</div>
                                <div class="trendNewsDesc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis beatae perspiciatis provident in illum, nam voluptates labore veritatis a unde!</div>
                            </div>
                        </div>
                        <div class="trensNewsDiv">
                            <div style="height: 260px">
                                <img src="https://quomodosoft.com/html/newsprk/assets/img/header/widget/tab1.jpg" alt="image" class="w-100">
                            </div>
                            <div class="trendNewsContent">
                                <div class="trendNewsTagNDt">
                                    <span class="trendNews_tag">Technology</span>
                                    <span class="trendNews_dt">May 5, 2021</span>
                                </div>
                                <div class="trendNewsTitle">Best garden wing supplies</div>
                                <div class="trendNewsDesc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis beatae perspiciatis provident in illum, nam voluptates labore veritatis a unde!</div>
                            </div>
                        </div>
                        <div class="trensNewsDiv">
                            <div style="height: 260px">
                                <img src="https://quomodosoft.com/html/newsprk/assets/img/feature/feature3.jpg" alt="image" class="w-100">
                            </div>
                            <div class="trendNewsContent">
                                <div class="trendNewsTagNDt">
                                    <span class="trendNews_tag">Technology</span>
                                    <span class="trendNews_dt">May 5, 2021</span>
                                </div>
                                <div class="trendNewsTitle">Best garden wing supplies</div>
                                <div class="trendNewsDesc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis beatae perspiciatis provident in illum, nam voluptates labore veritatis a unde!</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="newsBlockHead">Most Viewed</div>
                    <div class="mostViewCont">
                        <div class="sideMostViewCont">
                            <div class="sideMostViewCont_img">
                                <img src="https://quomodosoft.com/html/newsprk/assets/img/header/widget/tab1.jpg" alt="image" class="w-100">
                            </div>
                            <div class="sideMostViewCont_desc">
                                <div class="sideMostViewCont_tagNdt">
                                    <span class="sideMostViewCont_tag">Technology</span>
                                    <span class="sideMostViewCont_dt">May 5, 2021</span>
                                </div>
                                <div class="sideMostViewCont_title">Copa America: Luis Suarez from devastated US</div>
                            </div>
                        </div>
                        <div class="sideMostViewCont">
                            <div class="sideMostViewCont_img">
                                <img src="https://quomodosoft.com/html/newsprk/assets/img/header/widget/tab1.jpg" alt="image" class="w-100">
                            </div>
                            <div class="sideMostViewCont_desc">
                                <div class="sideMostViewCont_tagNdt">
                                    <span class="sideMostViewCont_tag">Technology</span>
                                    <span class="sideMostViewCont_dt">May 5, 2021</span>
                                </div>
                                <div class="sideMostViewCont_title">Copa America: Luis Suarez from devastated US</div>
                            </div>
                        </div>
                        <div class="sideMostViewCont">
                            <div class="sideMostViewCont_img">
                                <img src="https://quomodosoft.com/html/newsprk/assets/img/header/widget/tab1.jpg" alt="image" class="w-100">
                            </div>
                            <div class="sideMostViewCont_desc">
                                <div class="sideMostViewCont_tagNdt">
                                    <span class="sideMostViewCont_tag">Technology</span>
                                    <span class="sideMostViewCont_dt">May 5, 2021</span>
                                </div>
                                <div class="sideMostViewCont_title">Copa America: Luis Suarez from devastated US</div>
                            </div>
                        </div>
                        <div class="sideMostViewCont">
                            <div class="sideMostViewCont_img">
                                <img src="https://quomodosoft.com/html/newsprk/assets/img/header/widget/tab1.jpg" alt="image" class="w-100">
                            </div>
                            <div class="sideMostViewCont_desc">
                                <div class="sideMostViewCont_tagNdt">
                                    <span class="sideMostViewCont_tag">Technology</span>
                                    <span class="sideMostViewCont_dt">May 5, 2021</span>
                                </div>
                                <div class="sideMostViewCont_title">Copa America: Luis Suarez from devastated US</div>
                            </div>
                        </div>
                        <div class="sideMostViewCont">
                            <div class="sideMostViewCont_img">
                                <img src="https://quomodosoft.com/html/newsprk/assets/img/header/widget/tab1.jpg" alt="image" class="w-100">
                            </div>
                            <div class="sideMostViewCont_desc">
                                <div class="sideMostViewCont_tagNdt">
                                    <span class="sideMostViewCont_tag">Technology</span>
                                    <span class="sideMostViewCont_dt">May 5, 2021</span>
                                </div>
                                <div class="sideMostViewCont_title">Copa America: Luis Suarez from devastated US</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-5"></div>
        <div class="hotNews">
            <!-- <div class="newsBlockHead">Hot News</div> -->
            <div style="border: 25px solid #fff; position: relative;">
                <div class="hotOwl owl-hot-carousel owl-carousel owl-theme">
                    <div class="hotNewsDiv">
                        <div style="height: 100%">
                            <img src="https://quomodosoft.com/html/newsprk/assets/img/header/widget/tab1.jpg" alt="image" class="w-100">
                        </div>
                        <div class="hotNewsContent">
                            <div class="hotNewsTagNDt">
                                <span class="hotNews_tag">Technology</span>
                                <span class="hotNews_dt">May 5, 2021</span>
                            </div>
                            <div class="hotNewsTitle">Best garden wing supplies</div>
                        </div>
                    </div>
                    <div class="hotNewsDiv">
                        <div style="height: 100%">
                            <img src="https://quomodosoft.com/html/newsprk/assets/img/header/widget/tab1.jpg" alt="image" class="w-100">
                        </div>
                        <div class="hotNewsContent">
                            <div class="hotNewsTagNDt">
                                <span class="hotNews_tag">Technology</span>
                                <span class="hotNews_dt">May 5, 2021</span>
                            </div>
                            <div class="hotNewsTitle">Best garden wing supplies</div>
                        </div>
                    </div>
                    <div class="hotNewsDiv">
                        <div style="height: 100%">
                            <img src="https://quomodosoft.com/html/newsprk/assets/img/feature/feature3.jpg" alt="image" class="w-100">
                        </div>
                        <div class="hotNewsContent">
                            <div class="hotNewsTagNDt">
                                <span class="hotNews_tag">Technology</span>
                                <span class="hotNews_dt">May 5, 2021</span>
                            </div>
                            <div class="hotNewsTitle">Best garden wing supplies</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grey_bg"></div>
        <div class="mt-5"></div>
        <div class="vidNews">
            <div class="newsBlockHead" style="color: #fff;">Video News</div>
            <div class="vidNewsCont">
            <div class="row">
                <div class="col-8">
                    <div class="vidNewsDiv">
                        <div class="vidNewsImgCnt">
                            <img src="https://quomodosoft.com/html/newsprk/assets/img/feature/feature3.jpg" alt="image" class="w-100">
                        </div>
                        <div class="vidNewsContent">
                            <div class="vidNewsTagNDt">
                                <span class="vidNews_tag">Technology</span>
                                <span class="vidNews_dt">May 5, 2021</span>
                            </div>
                            <div class="vidNewsTitle">Best garden wing supplies</div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="newsBlockHead">Popular Posts</div>
                    <div class="mostViewCont">
                        <div class="sideMostViewCont">
                            <div class="sideMostViewCont_img">
                                <img src="https://quomodosoft.com/html/newsprk/assets/img/header/widget/tab1.jpg" alt="image"
                                    class="w-100">
                            </div>
                            <div class="sideMostViewCont_desc">
                                <div class="sideMostViewCont_tagNdt">
                                    <span class="sideMostViewCont_tag">Technology</span>
                                    <span class="sideMostViewCont_dt">May 5, 2021</span>
                                </div>
                                <div class="sideMostViewCont_title">Copa America: Luis Suarez from devastated US</div>
                            </div>
                        </div>
                        <div class="sideMostViewCont">
                            <div class="sideMostViewCont_img">
                                <img src="https://quomodosoft.com/html/newsprk/assets/img/header/widget/tab1.jpg" alt="image"
                                    class="w-100">
                            </div>
                            <div class="sideMostViewCont_desc">
                                <div class="sideMostViewCont_tagNdt">
                                    <span class="sideMostViewCont_tag">Technology</span>
                                    <span class="sideMostViewCont_dt">May 5, 2021</span>
                                </div>
                                <div class="sideMostViewCont_title">Copa America: Luis Suarez from devastated US</div>
                            </div>
                        </div>
                        <div class="sideMostViewCont">
                            <div class="sideMostViewCont_img">
                                <img src="https://quomodosoft.com/html/newsprk/assets/img/header/widget/tab1.jpg" alt="image"
                                    class="w-100">
                            </div>
                            <div class="sideMostViewCont_desc">
                                <div class="sideMostViewCont_tagNdt">
                                    <span class="sideMostViewCont_tag">Technology</span>
                                    <span class="sideMostViewCont_dt">May 5, 2021</span>
                                </div>
                                <div class="sideMostViewCont_title">Copa America: Luis Suarez from devastated US</div>
                            </div>
                        </div>
                        <div class="sideMostViewCont">
                            <div class="sideMostViewCont_img">
                                <img src="https://quomodosoft.com/html/newsprk/assets/img/header/widget/tab1.jpg" alt="image"
                                    class="w-100">
                            </div>
                            <div class="sideMostViewCont_desc">
                                <div class="sideMostViewCont_tagNdt">
                                    <span class="sideMostViewCont_tag">Technology</span>
                                    <span class="sideMostViewCont_dt">May 5, 2021</span>
                                </div>
                                <div class="sideMostViewCont_title">Copa America: Luis Suarez from devastated US</div>
                            </div>
                        </div>
                        <div class="sideMostViewCont">
                            <div class="sideMostViewCont_img">
                                <img src="https://quomodosoft.com/html/newsprk/assets/img/header/widget/tab1.jpg" alt="image"
                                    class="w-100">
                            </div>
                            <div class="sideMostViewCont_desc">
                                <div class="sideMostViewCont_tagNdt">
                                    <span class="sideMostViewCont_tag">Technology</span>
                                    <span class="sideMostViewCont_dt">May 5, 2021</span>
                                </div>
                                <div class="sideMostViewCont_title">Copa America: Luis Suarez from devastated US</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <div class="mt-5"></div>
        <div class="enterNews">
            <div class="row">
                <div class="col-8">
                    <div class="newsBlockHead">Entertainment News</div>
                    <div class="enterGrid">
                        <div class="enterNewsDiv">
                            <div class="enterImgCont">
                                <img src="https://quomodosoft.com/html/newsprk/assets/img/header/widget/tab1.jpg" alt="image"
                                    class="w-100">
                            </div>
                            <div class="enterNewsContent">
                                <div class="enterNewsTagNDt">
                                    <span class="enterNews_tag">Technology</span>
                                    <span class="enterNews_dt">May 5, 2021</span>
                                </div>
                                <div class="enterNewsTitle">Best garden wing supplies</div>
                                <div class="enterNewsDesc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis
                                    beatae perspiciatis provident in illum, nam voluptates labore veritatis a unde!</div>
                            </div>
                        </div>
                        <div class="enterNewsDiv">
                            <div class="enterImgCont">
                                <img src="https://quomodosoft.com/html/newsprk/assets/img/header/widget/tab1.jpg" alt="image"
                                    class="w-100">
                            </div>
                            <div class="enterNewsContent">
                                <div class="enterNewsTagNDt">
                                    <span class="enterNews_tag">Technology</span>
                                    <span class="enterNews_dt">May 5, 2021</span>
                                </div>
                                <div class="enterNewsTitle">Best garden wing supplies</div>
                                <div class="enterNewsDesc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis
                                    beatae perspiciatis provident in illum, nam voluptates labore veritatis a unde!</div>
                            </div>
                        </div>
                        <div class="enterNewsDiv">
                            <div class="enterImgCont">
                                <img src="https://quomodosoft.com/html/newsprk/assets/img/feature/feature3.jpg" alt="image"
                                    class="w-100">
                            </div>
                            <div class="enterNewsContent">
                                <div class="enterNewsTagNDt">
                                    <span class="enterNews_tag">Technology</span>
                                    <span class="enterNews_dt">May 5, 2021</span>
                                </div>
                                <div class="enterNewsTitle">Best garden wing supplies</div>
                                <div class="enterNewsDesc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis
                                    beatae perspiciatis provident in illum, nam voluptates labore veritatis a unde!</div>
                            </div>
                        </div>
                        <div class="enterNewsDiv">
                            <div class="enterImgCont">
                                <img src="https://quomodosoft.com/html/newsprk/assets/img/feature/feature3.jpg" alt="image"
                                    class="w-100">
                            </div>
                            <div class="enterNewsContent">
                                <div class="enterNewsTagNDt">
                                    <span class="enterNews_tag">Technology</span>
                                    <span class="enterNews_dt">May 5, 2021</span>
                                </div>
                                <div class="enterNewsTitle">Best garden wing supplies</div>
                                <div class="enterNewsDesc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis
                                    beatae perspiciatis provident in illum, nam voluptates labore veritatis a unde!</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="newsBlockHead">Most Viewed</div>
                    <div class="mostViewCont">
                        <div class="sideMostViewCont">
                            <div class="sideMostViewCont_img">
                                <img src="https://quomodosoft.com/html/newsprk/assets/img/header/widget/tab1.jpg" alt="image"
                                    class="w-100">
                            </div>
                            <div class="sideMostViewCont_desc">
                                <div class="sideMostViewCont_tagNdt">
                                    <span class="sideMostViewCont_tag">Technology</span>
                                    <span class="sideMostViewCont_dt">May 5, 2021</span>
                                </div>
                                <div class="sideMostViewCont_title">Copa America: Luis Suarez from devastated US</div>
                            </div>
                        </div>
                        <div class="sideMostViewCont">
                            <div class="sideMostViewCont_img">
                                <img src="https://quomodosoft.com/html/newsprk/assets/img/header/widget/tab1.jpg" alt="image"
                                    class="w-100">
                            </div>
                            <div class="sideMostViewCont_desc">
                                <div class="sideMostViewCont_tagNdt">
                                    <span class="sideMostViewCont_tag">Technology</span>
                                    <span class="sideMostViewCont_dt">May 5, 2021</span>
                                </div>
                                <div class="sideMostViewCont_title">Copa America: Luis Suarez from devastated US</div>
                            </div>
                        </div>
                        <div class="sideMostViewCont">
                            <div class="sideMostViewCont_img">
                                <img src="https://quomodosoft.com/html/newsprk/assets/img/header/widget/tab1.jpg" alt="image"
                                    class="w-100">
                            </div>
                            <div class="sideMostViewCont_desc">
                                <div class="sideMostViewCont_tagNdt">
                                    <span class="sideMostViewCont_tag">Technology</span>
                                    <span class="sideMostViewCont_dt">May 5, 2021</span>
                                </div>
                                <div class="sideMostViewCont_title">Copa America: Luis Suarez from devastated US</div>
                            </div>
                        </div>
                        <div class="sideMostViewCont">
                            <div class="sideMostViewCont_img">
                                <img src="https://quomodosoft.com/html/newsprk/assets/img/header/widget/tab1.jpg" alt="image"
                                    class="w-100">
                            </div>
                            <div class="sideMostViewCont_desc">
                                <div class="sideMostViewCont_tagNdt">
                                    <span class="sideMostViewCont_tag">Technology</span>
                                    <span class="sideMostViewCont_dt">May 5, 2021</span>
                                </div>
                                <div class="sideMostViewCont_title">Copa America: Luis Suarez from devastated US</div>
                            </div>
                        </div>
                        <div class="sideMostViewCont">
                            <div class="sideMostViewCont_img">
                                <img src="https://quomodosoft.com/html/newsprk/assets/img/header/widget/tab1.jpg" alt="image"
                                    class="w-100">
                            </div>
                            <div class="sideMostViewCont_desc">
                                <div class="sideMostViewCont_tagNdt">
                                    <span class="sideMostViewCont_tag">Technology</span>
                                    <span class="sideMostViewCont_dt">May 5, 2021</span>
                                </div>
                                <div class="sideMostViewCont_title">Copa America: Luis Suarez from devastated US</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5"></div>
        <div class="busiNews">
            <div class="row">
                <div class="col-8">
                    <div class="newsBlockHead">Business News</div>
                    <div class="busiGrid">
                        <div class="busiNewsDiv">
                            <div class="busiImgCont">
                                <img src="https://quomodosoft.com/html/newsprk/assets/img/header/widget/tab1.jpg" alt="image"
                                    class="w-100">
                            </div>
                            <div class="busiNewsContent">
                                <div class="busiNewsTagNDt">
                                    <span class="busiNews_tag">Technology</span>
                                    <span class="busiNews_dt">May 5, 2021</span>
                                </div>
                                <div class="busiNewsTitle">Best garden wing supplies</div>
                                <div class="busiNewsDesc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis
                                    beatae perspiciatis provident in illum, nam voluptates labore veritatis a unde!</div>
                            </div>
                        </div>
                        <div class="busiNewsDiv">
                            <div class="busiImgCont">
                                <img src="https://quomodosoft.com/html/newsprk/assets/img/header/widget/tab1.jpg" alt="image"
                                    class="w-100">
                            </div>
                            <div class="busiNewsContent">
                                <div class="busiNewsTagNDt">
                                    <span class="busiNews_tag">Technology</span>
                                    <span class="busiNews_dt">May 5, 2021</span>
                                </div>
                                <div class="busiNewsTitle">Best garden wing supplies</div>
                                <div class="busiNewsDesc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis
                                    beatae perspiciatis provident in illum, nam voluptates labore veritatis a unde!</div>
                            </div>
                        </div>
                        <div class="busiNewsDiv">
                            <div class="busiImgCont">
                                <img src="https://quomodosoft.com/html/newsprk/assets/img/feature/feature3.jpg" alt="image" class="w-100">
                            </div>
                            <div class="busiNewsContent">
                                <div class="busiNewsTagNDt">
                                    <span class="busiNews_tag">Technology</span>
                                    <span class="busiNews_dt">May 5, 2021</span>
                                </div>
                                <div class="busiNewsTitle">Best garden wing supplies</div>
                                <div class="busiNewsDesc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis
                                    beatae perspiciatis provident in illum, nam voluptates labore veritatis a unde!</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="newsBlockHead">Categories</div>
                    <div class="categoryViewCont">
                        <div class="categoryDiv">
                            <img src="https://image.freepik.com/free-photo/group-diverse-people-having-business-meeting_53876-25060.jpg">
                            <div class="categoryCntnt">
                                <div class="categoryTitle">Entertainment</div>
                                <div class="categoryArrow">⇁</div>
                            </div>
                        </div>
                        <div class="categoryDiv">
                            <img src="https://image.freepik.com/free-photo/group-diverse-people-having-business-meeting_53876-25060.jpg">
                            <div class="categoryCntnt">
                                <div class="categoryTitle">Sports</div>
                                <div class="categoryArrow">⇁</div>
                            </div>
                        </div>
                        <div class="categoryDiv">
                            <img src="https://image.freepik.com/free-photo/group-diverse-people-having-business-meeting_53876-25060.jpg">
                            <div class="categoryCntnt">
                                <div class="categoryTitle">Hot</div>
                                <div class="categoryArrow">⇁</div>
                            </div>
                        </div>
                        <div class="categoryDiv">
                            <img src="https://image.freepik.com/free-photo/group-diverse-people-having-business-meeting_53876-25060.jpg">
                            <div class="categoryCntnt">
                                <div class="categoryTitle">Trending</div>
                                <div class="categoryArrow">⇁</div>
                            </div>
                        </div>
                        <div class="categoryDiv">
                            <img src="https://image.freepik.com/free-photo/group-diverse-people-having-business-meeting_53876-25060.jpg">
                            <div class="categoryCntnt">
                                <div class="categoryTitle">Business</div>
                                <div class="categoryArrow">⇁</div>
                            </div>
                        </div>
                        <div class="categoryDiv">
                            <img src="https://image.freepik.com/free-photo/group-diverse-people-having-business-meeting_53876-25060.jpg">
                            <div class="categoryCntnt">
                                <div class="categoryTitle">Feature</div>
                                <div class="categoryArrow">⇁</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5"></div>
        <footer>
            <div class="foot1">
                <div class="footTitle">KabKaise</div>
                <div class="dividerDash"></div>
                <div class="footDiv col-8">
                    <div>
                        <div class="footDivTitle">Category</div>
                        <div class="footDivLinks">
                            <a href="#">Entertainment</a>
                        </div>
                        <div class="footDivLinks">
                            <a href="#">Sports</a>
                        </div>
                        <div class="footDivLinks">
                            <a href="#">Business</a>
                        </div>
                        <div class="footDivLinks">
                            <a href="#">World</a>
                        </div>
                    </div>
                    <div>
                        <div class="footDivTitle">Posts</div>
                        <div class="footDivLinks">
                            <a href="#">Featuring</a>
                        </div>
                        <div class="footDivLinks">
                            <a href="#">Trending</a>
                        </div>
                        <div class="footDivLinks">
                            <a href="#">Hot</a>
                        </div>
                        <div class="footDivLinks">
                            <a href="#">General</a>
                        </div>
                    </div>
                    <div>
                        <div class="footDivTitle">Links</div>
                        <div class="footDivLinks">
                            <a href="#">About Us</a>
                        </div>
                        <div class="footDivLinks">
                            <a href="#">Contact Us</a>
                        </div>
                        <div class="footDivLinks">
                            <a href="#">Privacy</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="foot2">
                <div class="foot2left">© Copyright 2021, All Rights Reserved</div>
                <div class="foot2right">
                    <div>About</div>
                    <div>Advertise</div>
                    <div>Contact Us</div>
                </div>
            </div>
        </footer>




        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script>
            jQuery(document).ready(function ($) {
                $('.owl-feat-carousel').owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 3
                        },
                        1000: {
                            items: 4
                        }
                    }
                })
            })
            jQuery(document).ready(function ($) {
                    $('.owl-trend-carousel').owlCarousel({
                        loop: true,
                        margin: 10,
                        nav: true,
                        responsive: {
                            0: {
                                items: 1
                            },
                            600: {
                                items: 2
                            },
                            1000: {
                                items: 2
                            }
                        }
                    })
                })
            jQuery(document).ready(function ($) {
                    $('.owl-hot-carousel').owlCarousel({
                        loop: true,
                        margin: 25,
                        nav: true,
                        responsive: {
                            0: {
                                items: 1
                            },
                            600: {
                                items: 2
                            },
                            1000: {
                                items: 2
                            }
                        }
                    })
                })
        </script>
    </body>
</html>
