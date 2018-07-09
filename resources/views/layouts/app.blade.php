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

    <style>
      .logo{
      position: absolute;
      top: -50px;
      left: -20px;
      }

      .footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        /* Set the fixed height of the footer here */
        height: 70px;
        background-color: #398DD5;
      }

      .copyright {
        width: 100%;
        text-align: center;
        font-size: 16px;
        font-weight: 600;
        color: $color_black;
        bottom: 0;
        letter-spacing: 1px;
      }

      .blank{
        display:inline-block;
        padding: 20px;
        background: #398DD5;
      }
      .itemf{
        display:inline-block;
        padding: %;
        color: #FFF;
        background: $color_blue;
        font-size: 16px;
        font-weight: 400;
        letter-spacing: 1px;

        &:hover {
      		border-bottom: 4px solid #FFF;
      	}

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
                        <br>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}"></a>
                    <a href="#" class="navbar-left"><img class="logo" src="https://i.imgur.com/bfY7ad3.png" alt="" width="200px"></a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <br>
                        <li class="">
                            <a href="#" class="">
                                <i class="seoicon-lightbulb-on"> 開課去</i>
                            </a>
                        </li>
                        <li class="">
                            <a href="#" class="">
                                <i class="seoicon-people"> 選課去</i>
                            </a>
                        </li>
                        <li class="search search_main" style="color: black; margin-top: 1px;">
                            <a href="#" class="js-open-search">
                                <i class="seoicon-loupe"></i>
                            </a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                      <br>
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

    <footer class="footer">
      <div class="container">
          <div class="blank"></div><a class="itemf faq" href="#0"><span>關於我們</span></a>
          <div class="blank"></div><a class="itemf faq" href="#0"><span>常見問題</span></a>
          <div class="blank"></div><a class="itemf service" href="#0"><span>服務政策</span></a>
          <div class="blank"></div><a class="itemf privacy" href="#0"><span>隱私權條款</span></a>
          <div class="blank"></div><a class="itemf blog" href="#0"><span>Blog</span></a>
          <div class="blank"></div><a class="itemf class" href="#0"><span>立即選課</span></a>
          <div class="blank"></div><a class="itemf class" href="#0"><span><i class="seoicon-social-facebook"></i></span></a>
          <div class="blank"></div><a class="itemf class" href="#0"><span><i class="seoicon-social-instagram"></i></span></a>
          </div>
      </div>
          <h1 class="copyright">copyright @ 2018-2019 SeeEDU reserved</h3>
    </footer>



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
