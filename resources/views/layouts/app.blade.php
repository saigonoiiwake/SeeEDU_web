<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115929258-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-115929258-3');

    gtag('config', 'AW-812562386');
  </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Facebook Pixel Code -->
  <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window,document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '298945697519327');
      fbq('track', 'PageView');
  </script>
  <noscript>
       <img height="1" width="1"
      src="https://www.facebook.com/tr?id=298945697519327&ev=PageView
      &noscript=1"/>
  </noscript>
    <!-- End Facebook Pixel Code -->

    <!--  SEO -->
    <meta name="description" content="最優質的線上日語課程，JLPT日文檢定、日語會話，透過直播即時互動及系統性的教學，精通第二外語不再是夢！">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SeeEDU LIVE School 最優質的日語直播教室</title>

    <!-- Styles -->
    <link rel="Shortcut Icon" type="image/x-icon" href="{{ asset('app/images/eye-01.ico') }}" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('app/css/font-style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/crumina-fonts.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    @yield('styles')


<style>

* {
  font-family: Arial, "文泉驛正黑", "WenQuanYi Zen Hei", "儷黑 Pro", "LiHei Pro", "微軟正黑體", "Microsoft JhengHei", "標楷體", DFKai-SB, sans-serif;
}

.navbar {
  min-height: 50px;
}

.navbar-brand {
  padding: 12px 15px;
  height: 50px;
  line-height: 50px;
}

.navbar-toggle {
  /* (80px - button height 34px) / 2 = 23px */
  margin-top: 12px;
  padding: 5px 10px !important;
}

.logo {
  padding-top: 0px;
}

@media (min-width: 768px) {
  .navbar-nav > li > a {
    /* (80px - line-height of 27px) / 2 = 26.5px */
    padding-top: 20.5px;
    padding-bottom: 20.5px;
    line-height: 22px;
  }
}

</style>

</head>

<body>



    <header id="app">
        <nav class="navbar navbar-default navbar-fixed-top">
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
                    <a class="navbar-brand" href="{{ url('/') }}"><img class="logo" src="https://res.cloudinary.com/sabina123/image/upload/v1531194117/logo_final-398DD5.png" alt="" width="100px"></a>
                    <!-- <a href="{{ route('home') }}" class="navbar-left"><img class="logo" src="https://res.cloudinary.com/sabina123/image/upload/v1531194117/logo_final-398DD5.png" alt="" width="100px"></a> -->
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <!-- <li class="">
                            <a href="{{ route('/courses/create/welcome') }}" class="">
                                <i class="far fa-lightbulb"> 開課去</i>
                            </a>
                        </li> -->
                        <li class="">
                            <a href="{{ route('courses') }}" class="">
                                <i class="fas fa-flag-checkered"> 選課去</i>
                            </a>
                        </li>
                        <li class="">
                            <a href="https://seeedu.typeform.com/to/bxxYrN" class="" target="_blank">
                                <i class="fab fa-teamspeak"> 報名免費試聽</i>
                            </a>
                        </li>


                        <!-- <li class="search search_main" style="color: black; margin-top: 8px;">
                          <input type="text" name="search" >
                        </li> -->
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">


                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}"> 登入 </a></li>
                            <li><a href="{{ route('register') }}"> 註冊 </a></li>
                        @else

                            <li>

                                 <img src="{{ asset(Auth::user()->avatar ? Auth::user()->avatar : "app/img/blog-details-author.png")  }}" alt="Author" width="40px" height="40px" style="border-radius: 50%; margin-top: 15px;">
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->nick_name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">

                                    <li>
                                      <a href="#">
                                          <i class="fas fa-book"> 我的課程(未開放)</i>
                                      </a>
                                    </li>

                                    <li>
                                      <a href="#">
                                          <i class="far fa-edit"> 購買紀錄(未開放)</i>
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
    </header>

    @yield('content')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    @yield('scripts')

    <script>

    @if(Session::has('success'))

      toastr.success('{{ Session::get('success') }}')

    @endif

    @if(Session::has('info'))

      toastr.info('{{ Session::get('info') }}')

    @endif

    @if(Session::has('error'))

      toastr.error('{{ Session::get('error') }}')

    @endif

    @if(Session::has('warning'))

      toastr.warning('{{ Session::get('warning') }}')

    @endif

    </script>



</body>
</html>
