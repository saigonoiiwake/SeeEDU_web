<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Summernote</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<style>
.container {
width: 100vw;
height: 100vh;
background: url('https://images.unsplash.com/photo-1478916813757-c14a1ce81e3e?auto=format&fit=crop&w=2767&q=80&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D') no-repeat center center fixed;
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
            <img id="logo" src="https://assets-cdn.github.com/images/modules/logos_page/GitHub-Logo.png" alt="">
            <div class="para">
              <p class="lead mg">Join the best website, it's free, the github logo is there only because it's open source</p>
            </div>
        </div>

          <div class="row">

            <div class="col-md-6">
              <h3 class="lead-text"> Join Us with social media </h3>
                <div id="social-platforms">
                  <div class="media-container">
                    <a class="btnn btnn-icon btnn-facebook" href="#"><i class="fa fa-facebook">                           </i><span>Facebook</span></a>
                  </div>
                  <div class="media-container">
                     <a class="btnn btnn-icon btnn-google" href="#"><i class="fa fa-google">
                </i><span>Google+</span></a>
                  </div>
                </div>
            </div>
            <div class="left-divider"></div>
            <div class="col-md-6">
              <form action="">
             <div class="form-group">
            <label for="fname">First Name :</label>
            <input id="fname" type="text" class="form-control">
          </div>
             <div class="form-group">
            <label for="lname">Last Name :</label>
            <input id="lname" type="text" class="form-control">
          </div>

          <div class="form-group">
            <label for="email">Email :</label>
            <input id="email" type="text" class="form-control">
          </div>
            <div class="form-group">
            <label for="password">Password :</label>
            <input id="password" type="password" class="form-control">
          </div>
                <div class="form-group">
                  <input type="submit" value="submit" class="btn-primary btnn form-submit"></input>
                </div>
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
