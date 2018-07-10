<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SeeEDU</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="app/css/crumina-fonts.css">
    @yield('course_style')

    <style>

    input[type=text] {
        width: 60px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        font-size: 12px;
        background-color: white;
        background-image: url('searchicon.png');
        background-position: 10px 10px;
        background-repeat: no-repeat;
        padding: 4px 4px 4px 4px;
        -webkit-transition: width 0.4s ease-in-out;
        transition: width 0.4s ease-in-out;
      }

        input[type=text]:focus {
          width: 100%;
        }
    </style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">SeeEDU</a>
                    <!-- <a href="#" class="navbar-left"><img class="logo" src="https://i.imgur.com/bfY7ad3.png" alt="" width="200px"></a> -->
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li class="">
                            <a href="#" class="">
                                <i class="seoicon-lightbulb-on"> 開課去</i>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('courses') }}" class="">
                                <i class="seoicon-people"> 選課去</i>
                            </a>
                        </li>
                        <li class="search search_main" style="color: black; margin-top: 1px;">
                            <a class="js-open-search">
                                <i class="seoicon-loupe"></i>
                            </a>
                        </li>
                        <li class="search search_main" style="color: black; margin-top: 8px;">
                          <input type="text" name="search" >
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">

                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}"> 登入 </a></li>
                            <li><a href="{{ route('register') }}"> 註冊 </a></li>
                        @else

                            <li>
                                 <img src="app/img/blog-details-author.png" alt="Author" width="50px" height="50px" style="border-radius: 50%;">
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                  <li>
                                    <a href="#" class="">
                                        <i class="seoicon-button"> 我的課程</i>
                                    </a>
                                  </li>
                                  <li>
                                  <li>
                                    <a href="#" class="">
                                        <i class="seoicon-mail-send"> 我的信箱</i>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#" class="">
                                        <i class="seoicon-basket"> 購物車</i>
                                    </a>
                                  </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="seoicon-exit-door"> 登出</i>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>

                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
  <div class="header-spacer"></div>
        @yield('content')
</div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
