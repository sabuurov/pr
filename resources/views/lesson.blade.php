<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <title> PHP learn </title>

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
  @include('layout.navbar')
  <hr>
  <center><h1> PHP Tutorial </h1></center>
  <hr class="bottom-line">

<!--Types -->
  <div class='type'>
    <img src="https://blog.one.com/wp-content/uploads/2018/10/php-update-1-732x549.png" class="php1" align="left">
    <h2>Introduction PHP</h2>
    <p>Learners: 10 400</p>
    <hr>
    <a href="#intro"><button class="more">More Info</button></a>
  </div>

  <div class='types'>
    <img src="https://jcover.ru/wp-content/uploads/2018/05/PHP.png" class="php2" align="left">
    <h2>Arrays</h2>
    <p>Learners: 10 387</p>
    <hr>
    <a href="#arrays"><button class="more">More Info</button></a>
  </div>

  <div class='typess'>
    <img src="https://programfiles.info/wp-content/uploads/2019/05/php-get-post-678x509.png" class="php1" align="left">
    <h2>Get & Post</h2>
    <p>Learners: 10 369</p>
    <hr>
    <a href="#getpost"><button class="more">More Info</button></a>
  </div>

  <div class='types'>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTEvpQgpnBKNWOF-7vthCz_URReFPuea08L3vanrgljsyfksbC7&usqp=CAU" class="php2" align="left">
    <h2>Session & cookies</h2>
    <p>Learners: 10 350</p>
    <hr>
    <a href="#sessioncookies"><button class="more">More Info</button></a>
  </div>

  <div class='typess'>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSl_58fhl2pJuMQJWCuoPEOMTmEkbqajROqSOoO7_usw5QADOpl&usqp=CAU" class="php1" align="left">
    <h2>Database</h2>
    <p>Learners: 10 345</p>
    <hr>
    <a href="#database"><button class="more">More Info</button></a>
  </div>

  <div class='types'>
    <img src="https://webshake.ru/app/img/oop-v-php.jpg" class="php2" align="left">
    <h2>OOP</h2>
    <p>Learners: 10 330</p>
    <hr>
    <a href="#oop"><button class="more">More Info</button></a>
  </div>

<!-- introduction-->  
  <section id="intro" class="section-padding">
    <center><h2> Lecture #1. Introduction PHP </h2></center>
    <hr class="bottom-line">
    <div class="level"><br>
      <center><object><embed src="https://dl.iitu.kz/pluginfile.php/356300/mod_resource/content/1/2%20lecture.pdf" width="900px;" height="540px;" /></object></center>
      <img src="https://cdn.educba.com/academy/wp-content/uploads/2019/03/Main-Components-of-PHP-2.png" class="photoo" align="right">
      <ol>
        <h4> Five important characteristics make PHP's practical nature possible: </h4>
        <li> Simplicity </li>
        <li> Efficiency </li>
        <li> Security </li>
        <li> Flexibility </li>
        <li> Familiarity </li>
      </ol> 
      <p class="pcl"> "Hello World" script in PHP </p>
      <textarea name="message" class="pcl" rows="9" cols="40">
    <html>

    <head>
     <title >Hello World </title>
    </head>

    <body>
      <? php echo "Hello, World!"; ?>
    </body>

    </html> 
      </textarea>
      <p class="pcl"> Then, it will produce following result: </p>
      <textarea name="message" class="pcl" rows="3" cols="40"> Hello, World! </textarea><hr>
      <p class="pcl"><i> Test your knowledge, go to the next level. Good luck to you! </i>
      <a href="#testintro"><button class="more"> Test </button></a></p>
    </div>
  </section>

<!-- datatypes -->
  <section id="arrays" class="section-padding">
    <center><h2> Lecture #2. Arrays </h2></center>
    <hr class="bottom-line">
  </section>
<!-- array -->
  <section id="getpost" class="section-padding">
    <center><h2> Lecture #3. Get & Post </h2></center>
    <hr class="bottom-line">
  </section>
<!-- loops -->
  <section id="sessioncookies" class="section-padding">
    <center><h2> Lecture #4. Session & cookies </h2></center>
    <hr class="bottom-line">
  </section>
<!-- database -->
  <section id="database" class="section-padding">
    <center><h2> Lecture #5. Database </h2></center>
    <hr class="bottom-line">
  </section>
<!-- oop -->
  <section id="oop" class="section-padding">
    <center><h2> Lecture #6. OOP </h2></center>
    <hr class="bottom-line">
  </section>

<!-- introduction test -->
  <section id="testintro" class="section-padding">
    <div class="fortest">
      <h3> Test on the lecture "Introduction PHP" </h3>
      <form method="post">
        <div>
          <p> 1. What is a correct way to add a comment in PHP? </p>
          <p><input type="checkbox" name="ques1" value="1">/ * --- * /</p>
          <p><input type="checkbox" name="ques1" value="2">* \ --- \ *</p>
          <p><input type="checkbox" name="ques1" value="3">< ! --- ! ></p>
        </div>
        <div>
          <p> 2. All variables in PHP start with which symbol? </p>
          <p><input type="checkbox" name="ques2" value="1">!</p>
          <p><input type="checkbox" name="ques2" value="2">$</p>
          <p><input type="checkbox" name="ques2" value="3">&</p>
          <p><input type="checkbox" name="ques2" value="4">*</p>
        </div>
        <div>
          <p> 3. What is the correct way to end a PHP statement? </p>
          <p><input type="checkbox" name="ques3" value="1">;</p>
          <p><input type="checkbox" name="ques3" value="2">,</p>
          <p><input type="checkbox" name="ques3" value="3">/</p>
          <p><input type="checkbox" name="ques3" value="4">.</p>
        </div>
        <div>
          <p><input type="submit" value="Submit" class="more" /></p>
        </div>
      </form>
    </div>  
  </section>

  @include('layout.footer')

</body>
</html>