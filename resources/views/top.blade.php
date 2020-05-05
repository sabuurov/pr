<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> PHP Learn </title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <style>
    body {
      font-size: 15px;
        line-height: 1.52;
        color: #717f86;
        font-size: 16px;
      font-family: 'Open Sans', sans-serif;
        font-weight: 400;
    }
    ul {
      list-style: none;
    }
    ol{
      margin-left: 20px;
    }
    .navbar-default .navbar-brand {
        color: #5FCF80;
    }
    .navbar-default {
        background-color: #ffffff;
    }
    .course-text{
        padding: 84px;
    }
    .navbar-default .navbar-nav > li > a {
        color: #717f86;
        font-size: 14px;
        font-weight: 700;
    }
    .navbar-nav > li > a{
      padding: 0px;
      margin: 10px 5px;
      padding: 10px 15px;
    }
    .navbar-default .navbar-nav > li > a:focus, .navbar-default .navbar-nav > li > a:hover
    {
      color: #5FCF80;
    }

    .footer {
        padding: 30px 0 20px;
        background: #111;
        color: #ccc;
    }
    .footer a {
        color: #fff;
    }

    .footer h3{
      font-weight: 300;
      letter-spacing: 0.05em;
      margin: 0 0 40px;
      font-size: 24px;
    }
    .footer .form-control {
        border-radius: 30px;
        border: none;
        background: rgba(255,255,255,.1);
        padding-left: 30px;
        color: #e5e6e7;
        margin-bottom: 0;
        height: 40px;
    }
    .footer .social-links li a {
        color: #fff;
        font-size: 32px;
        line-height: 50px;
        border-radius: 50%;
        text-align: center;
        -webkit-transition: all .3s ease-out;
        transition: all .3s ease-out;
    }
    .footer .social-links li {
        display: inline-block;
        margin: 0 25px 25px;
        -webkit-transition: all .3s ease-out;
        transition: all .3s ease-out;
    }
    .footer .mc-trial {
        margin: 20px 0;
    }
    .footer .social-links {
        list-style: none;
        padding: 0;
        margin: 30px 0 40px;
        padding: 40px 0 0;
        border-bottom: 1px solid rgba(255,255,255,0.2);
    }
    .footer .form-control:focus{
        box-shadow: none;
    }
    .php1{
      width: 100px;
      height: 100px;
      margin: 20px;
      border-radius: 100%;
    }
    .php2{
      width: 100px;
      height: 100px;
      margin: 20px;
      border-radius: 100%;
      margin-left: -120px;
    }
    .type{
      margin-top: 180px;
      border: 8px solid rgb(247,248,249);
      width: 500px;
      height: 200px;
      bottom: 150px;
      left: 120px;
      position: relative;
      text-align: center;
    }
    .types{
      margin-top: -215px;
      border: 8px solid rgb(247,248,249);
      width: 500px;
      height: 200px;
      bottom: 150px;
      left: 680px;
      position: relative;
      text-align: center;
    }
    .typess{
      margin-top: 20px;
      border: 8px solid rgb(247,248,249);
      width: 500px;
      height: 200px;
      bottom: 150px;
      left: 120px;
      position: relative;
      text-align: center;
    }
    .more{
        height: 30px;
        width: 100px;
        font-size: 18px;
        border-radius: 5px;
        margin-left: 10px;
        background-color: #d3d3d3;
        color: dimgray;
        margin-right: 20px;
    }
    .bottom-line{
      width: 25px;
      height: 3px;
      background-color: rgb(99, 122, 145);
    }
    .photoo {
      width: 480px;
      height: 350px;
      margin-right: 50px;
      margin-top: 33px;
    }
    .level{
      background-color: #f5f5f5;
      width: 1294px;
      height: 1150px;
      margin-left: 20px;
    }
    .pcl{
      margin-left: 20px;
    }
    .fortest{
      background-color: #f5f5f5;
      width: 700px;
      height: 665px;
      margin-left: 20px;
      padding-left: 20px;
      margin-bottom: 50px;
    }
  </style>
</head>

<body>

<!--Navigation bar-->
  @include('layout.navbar')
<!--/ Navigation bar-->

<!-- TOP Learners -->
  <section id="faculity-member" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2> TOP Learners </h2>
          <p> Anyone who reaches level 30 can create a blog for learning programming (img, files, videos, etc.) </p>
          <hr class="bottom-line">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <div class="pm-staff-profile-image">
                <img src="img/yergali.jpg" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name"> Yergali Dauletbek </p>
              <p class="pm-staff-profile-title"> 32 level </p>
              <p class="pm-staff-profile-bio"> PHP Learner Pro </p>
              <a href="#yergali"><button class="more"> go to the channel </button></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <div class="pm-staff-profile-image">
                <img src="/public/test/img/yerlan.jpeg" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name"> Yerlan Karabaliyev </p>
              <p class="pm-staff-profile-title"> 29 level </p>
              <p class="pm-staff-profile-bio"> PHP Learner </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <div class="pm-staff-profile-image">
                <img src="img/sabina.jpg" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name"> Sabina Rakhmetulla </p>
              <p class="pm-staff-profile-title"> 28 level </p>
              <p class="pm-staff-profile-bio"> PHP Learner </p>
            </div>
          </div>
        </div>
<!-- / TOP Learners -->

<!-- Yergali's Channel -->
        <section id="yergali" class="section-padding">
          <div class="header-section text-center">
            <h2> Yergali Dauletbek's Channel </h2>
            <p> I've reached level 32! <br> In my channel we will Learn PHP for beginners! </p>
            <hr class="bottom-line">

            <p> Lesson 1. PHP basics </p>
            <p> PHP is an acronym for "PHP: Hypertext Preprocessor" <br> PHP is a widely-used, open source scripting language <br> PHP scripts are executed on the server <br> PHP is free to download and use </p>
            <p class="pcl"> Example Code </p>
            <textarea name="message" class="pcl" rows="9" cols="40">
              <!DOCTYPE html>
              <html>
              <body>

              <?php
              echo "My first PHP script!";
              ?>

              </body>
              </html>
            </textarea>
            <video controls width="600" src="public/test/video/lesson1.mp4"> </video>
            <hr class="bottom-line">

            <p> Lesson 2. How do I work with PHP? </p>
            <p> A PHP script is executed on the server, and the plain HTML result is sent back to the browser. <br> A PHP script can be placed anywhere in the document. <br> A PHP script starts with < ?php and ends with ?>: </p>
            <p class="pcl"> Example Code </p>
            <textarea name="message" class="pcl" rows="9" cols="40">
              <?php
                // PHP code goes here
              ?>
            </textarea>
            <video controls width="600" src="public/test/video/lesson2.mp4"> </video>
            <hr class="bottom-line">
            <p> Lesson 3. Write "Hello World!" </p>
            <p> The default file extension for PHP files is ".php". <br> A PHP file normally contains HTML tags, and some PHP scripting code. <br> Below, we have an example of a simple PHP file, with a PHP script that uses a built-in PHP function "echo" to output the text "Hello World!" on a web page: </p>
            <textarea name="message" class="pcl" rows="9" cols="40">
              <!DOCTYPE html>
              <html>
              <body>

              <h1>My first PHP page</h1>

              <?php
              echo "Hello World!";
              ?>

              </body>
              </html>
            </textarea>
            <video controls width="600" src="public/test/video/lesson3.mp4"> </video>
          </div>
        </section>
<!-- / Yergali's Channel -->

      </div>
    </div>
  </section>

<!-- Footer -->
  @include('layout.footer')
<!--/ Footer -->

</body>
</html>
