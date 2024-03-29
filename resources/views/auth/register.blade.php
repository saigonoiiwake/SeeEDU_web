<!DOCTYPE html>
<html lang="en">
<head>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115929258-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-115929258-3');

    gtag('config', 'AW-812562386');
  </script>


    <!-- Event snippet for 註冊 conversion page
    In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
    function gtag_report_conversion( {{ route('register') }} ) {
      var callback = function () {
        if (typeof({{ route('register') }}) != 'undefined') {
          window.location = {{ route('register') }};
        }
      };
      gtag('event', 'conversion', {
          'send_to': 'AW-812562386/NvxoCLeTkYcBENLvuoMD',
          'event_callback': callback
      });
      return false;
    }
    </script>

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



  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>register</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<style>


.container {
width: 100vw;
height: 100vh;
background-size: cover;
}
#logo{
max-width: 250px;
z-index: 13;
position: relative;
}
.form-container {
position: relative;
padding: 50px 40px;
}
.form-container-in {
position: absolute;
background-color: #F5F5F5;
top: 0;
left: 0;
right:0;
bottom: 0;
opacity: 0.9;
}
.log-container {
 text-align: center;
}
.flex-container {
width: 100%;
height: 100%;
display: flex;
justify-content: center; /*centers items on the line (the x-axis by default)*/
align-items: center;
}
p.lead {
padding: 15px 10px;
position: relative;
z-index: 10;
}

.row.full {
width: 100%;
}
.left-divider {
border-left: solid 1px #78909C;
padding-left: 20px;
}
.lead-text {
text-align: center;
padding: 10px;
font-weight: 300;
font-size: 1.8em;
line-height: 15px;
letter-spacing: 1px;
text-transform: uppercase;
}
/* social */
#social-media {
position:relative;
top:100px;
top:25vh;
font-size:1rem;
text-align:center;
overflow:hidden;
}

.btnn {
width:100%;
clear:both;
white-space:nowrap;
font-size:.8em;
display:block;
border-radius:5px;
box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.35);
margin:2px;
-webkit-transition:all .5s;
-moz-transition:all .5s;
transition:all .5s;
overflow:hidden
}

.btnn:hover {
box-shadow: 0 5px 20px 0 rgba(0, 0, 0, 0.45);
}

.btnn:focus {
box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.4);
}

.btnn > span,.btnn-icon > i {
float:left;
padding:13px;
-webkit-transition:all .5s;
-moz-transition:all .5s;
transition:all .5s;
line-height:1em
}

.btnn > span {
padding:14px 18px 16px;
white-space:nowrap;
color:#FFF;
background:#b8b8b8
}

.btnn:hover > span {
color:#212121;
font-weight:900;
}

.btnn:focus > span {
background:#9a9a9a
}

.btnn-icon > i {
border-radius:5px 0 0 5px;
position:relative;
width:20px;
text-align:center;
font-size:1.25em;
color:#fff;
background:#212121
}

.btnn-icon > i:after {
content:"";
border:8px solid;
border-color:transparent transparent transparent #222;
position:absolute;
top:13px;
right:-15px
}

.btnn-icon:hover > i,.btnn-icon:focus > i {
color:#FFF;
}

.btnn-icon > span {
border-radius:0 5px 5px 0
}

/*Facebook*/
.btnn-facebook:hover > i,.btnn-facebook:focus > i {
color:#3b5998;
width:50%;
}

.btnn-facebook > span {
background:#3b5998;
width:50%;
}

/*Google Plus*/
.btnn-google:hover > i,.btnn-google:focus > i {
color:#d34836;
width:50%;
}

.btnn-google > span {
background:#d34836;
width:50%;
}
.media-container {
padding: 5px 20px;
}
input.form-submit {
padding: 5px 20px;
font-size: 1.3em;
font-weight: 300;
text-transform: capitalize;
}
</style>

</head>

<body>
  <div class="container">
    <div class="flex-container">
      <div class="row full">
      <div class="col-md-12">
        <div class="form-container">
                  <div class="form-container-in">
          </div>
          <div class="log-container">
            <a href="{{ route('home') }}"><img id="logo" src="https://res.cloudinary.com/drxz8uaob/image/upload/v1545195166/seeedu_logo_1020final-03.png" alt="">
          </a>

        </div>

          <div class="row">

            <div class="col-md-6">
              <h3 class="lead-text"> 使用社群帳號登入 </h3>
                <div id="social-platforms">
                  <div class="media-container">
                    <a class="btnn btnn-icon btnn-facebook" href="{{ route('login.facebook') }}"><i class="fa fa-facebook">                           </i><span>Facebook</span></a>
                  </div>
                  <div class="media-container">
                     <a class="btnn btnn-icon btnn-google" href="{{ route('login.google') }}"><i class="fa fa-google">
                </i><span>Google+</span></a>
                  </div>
                </div>
            </div>
            <div class="left-divider"></div>
            <div class="col-md-6">

              <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                {!! csrf_field() !!}
                 <div class="form-group">
                  <label for="lname">暱稱</label>
                  <input id="lname" type="text" class="form-control{{ $errors->has('nick_name') ? ' is-invalid' : '' }}" name="nick_name" value="{{ old('nick_name') }}" required autofocus>

                    @if ($errors->has('nick_name'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('nick_name') }}</strong>
                    </span>
                    @endif

                </div>

                <div class="form-group">
                  <label for="email">Email </label>
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                      </span>
                    @endif
                </div>

                <div class="form-group">
                  <label for="password">密碼 </label>
                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                </div>

                <div class="form-group">
                  <label for="password-confirm">確認密碼</label>
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>


                <div class="form-group">
                  <button type="submit" class="btn btn-primary btnn form-submit">註冊</button>
                </div>

                <a class="btn btn-link" href="{{ route('login') }}">
                  已有帳號?
                </a>

              </form>


            </div>
          </div>

          </div>
      </div>
    </div>
    </div>

  </div>
</body>
</html>
