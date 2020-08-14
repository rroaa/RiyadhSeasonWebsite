<?php
session_start();
date_default_timezone_set('Asia/Riyadh'); 
include 'comment.inc.php'; //php code to set and get comments
include 'dbh.inc.php'; //database connection
?>
<!DOCTYPE html>
<html  lang="ar,en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>رياض ونتر وندرلاند</title>
<!-- 

Highway Template

https://templatemo.com/tm-520-highway

-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/light-box.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
        <link rel="stylesheet" href="css/commentstyle.css">

        <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>

    <nav>
        <div class="logo">
            <a href="riyadh-season.php">Riyadh<em> Season</em></a>
        </div>
      <div class="menu-icon">
        <span></span>
      </div>
    </nav>

    <div class="page-heading">
        <div class="container">
            <div class="heading-content">
                <h1>رياض ونتر وندرلاند</h1>
            </div>
        </div>
    </div>


    <div class="blog-entries">
        <div class="container">
            <div class="col-md-9">
                <div class="blog-posts">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="single-blog-post">
                                <img src="home/wonderlandd3.png" alt="">
                                <div class="text-content">
                                    <h2>رياض ونتر وندرلاند</h2>
                                    
                                    <p>من الأجواء اللندنية لأجواء الرياض الشتوية، جبنالكم ونتر وندرلاند بألعابها وفعالياتها اللي تناسب كل الأعمار، وزدنا عليها عروض خفة ومفاجآت كثيرة. عشان مهما كان جوّك، تلاقي اللي يناسبك في أجواء ونتر وندرلاند.

 
                                    <br><br>يمكنك إستخدام باصات النقل الترددي مجانا  الى منطقة وينتروندرلاند بعد شراءك لتذكرة ونتروندرلاند او أى فعالية بداخلها عن طريق المواقف التالية:

<br> المواقف الأولى:
 <a href=" https://goo.gl/maps/VvLMCP9wM5PBPZDe7"> https://goo.gl/maps/VvLMCP9wM5PBPZDe7</a>
<br> المواقف الثانية:
<a href="https://goo.gl/maps/3NZiwqpzfcgWqnwW6">https://goo.gl/maps/3NZiwqpzfcgWqnwW6</a>
<br> المواقف الثالثة:
<a href="https://goo.gl/maps/cCDhcETGw2aqnUdj9">https://goo.gl/maps/cCDhcETGw2aqnUdj9</a>
                                    <br><br><a href="riyadh-season.php">الرئسية</a></p>
                                    <?php
        if(isset($_SESSION["newSession"]))
        {
       echo " <form method='POST' action='".setComments($conn)."'> <!--post so we cant see the data in url, Private  -->
            <input type='hidden' name='uid' value='".$_SESSION["newSession"]."'> <!-- cant see it, but it's submitted -->
            <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
            <input type='hidden' name='pageid' value='1'>
            <textarea name='message' id='message'></textarea> <br>
            <button name='CommentSubmit' type='submit' id='CommentSubmit'> Comment</button>
        </form>"; }
        
        getComments($conn, '1');
        ?>
                                    <div class="tags-share">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul class="tags">
                                                    
                                                    <li><a href="https://www.virginmegastore.sa/en/store-finder/">التذاكر</a>,</li>
                                                    <li><a href="https://www.google.com/maps/place/24%C2%B046'12.7%22N+46%C2%B038'40.0%22E/@24.770196,46.6466267,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d24.770196!4d46.644438?hl=ar">الموقع</a>,</li>
                                                    
                                                </ul>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <div class="col-md-3">
                     
                    <div class="recent-posts">
                        <div class="sidebar-heding">
                            <h2>فعاليات أخرى</h2>
                        </div>
                        <ul>
                            <li><a href="single-post1.php">
                                <img src="home/boulevard.jpg" alt="Recent Post 1">
                                <div class="text">
                                    <h6>البوليفارد</h6>
                                    
                                </div>
                            </li></a>
                            <li><a href="single-post4.php">
                                <img src="home/nightGarden.jpg" alt="Recent Post 2">
                                <div class="text">
                                    <h6>الحدائق الليلية</h6>
                                    
                                </div>
                            </li></a>
                            <li><a href="single-post5.php">
                                <img src="home/magicForest.jpg" alt="Recent Post 3">
                                <div class="text">
                                    <h6>الحديقة الساحرة</h6>
                                    
                                </div>
                            </li></a>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>


    <footer>
        <div class="container-fluid">
            <div class="col-md-12">
                <p> Web Application Programming Project</p>
            </div>
        </div>
    </footer>


    <section class="overlay-menu">
      <div class="container">
        <div class="row">
          <div class="main-menu">
              <ul>
                   <?php if( isset($_SESSION['newSession']) && !empty($_SESSION['newSession']) )
                {
                ?>
                  <li>
                      <a href="../logout-page.php">Logout</a>
                  </li>

                <?php }else{ ?>
                  <li>
                      <a href="../login_page.php">Login</a>
                  </li>
           
            
                  <li>
                      <a href="../signup-page.php">Sign up</a>
                  </li>

                <?php } ?>
                  
              </ul>
             
          </div>
        </div>
      </div>
    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>
</html>