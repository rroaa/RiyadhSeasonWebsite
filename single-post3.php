<?php
session_start();
date_default_timezone_set('Asia/Riyadh'); 
include 'comment.inc.php'; //php code to set and get comments
include 'dbh.inc.php'; //database connection
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>سفاري الرياض</title>
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
            <a href="">Riyadh<em> Season</em></a>
        </div>
      <div class="menu-icon">
        <span></span>
      </div>
    </nav>

    <div class="page-heading">
        <div class="container">
            <div class="heading-content">
                <h1>سفاري الرياض</h1>
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
                                <img src="home/sfr.jpg" alt="">
                                <div class="text-content">
                                    <h2>سفاري الرياض</h2>
                                    
                                    <p>لأول مرة في المملكة منطقة سفاري مفتوحة تأخذك في رحلة خاصة الى عالم الحيوانات الحقيقي في تجربة فريدة من نوعها بالإضافة الى منطقة المنتزه العام وفيه الحديقة المغلقة والمسرح المفتوح والكثير من الفعاليات والعروض الاستعراضية على مدار الساعة للأطفال والكبار في جو ملئ بالمتعة والاثارة.
 
                                    <br><br><a href="riyadh-season.php">الرئسية</a></p>
                                    <?php
        if(isset($_SESSION["newSession"]))
        {
       echo " <form method='POST' action='".setComments($conn)."'> <!--post so we cant see the data in url, Private  -->
            <input type='hidden' name='uid' value='".$_SESSION["newSession"]."'> <!-- cant see it, but it's submitted -->
            <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
            <input type='hidden' name='pageid' value='4'>
            <textarea name='message' id='message'></textarea> <br>
            <button name='CommentSubmit' type='submit' id='CommentSubmit'> Comment</button>
        </form>"; }
        
        getComments($conn, '4');
        ?>
                                    <div class="tags-share">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul class="tags">
                                                    
                                                    <li><a href="https://www.ticketmx.com/ar/d/144/riyadh-safari">التذاكر</a>,</li>
                                                    <li><a href="https://www.google.com/maps/place/24%C2%B024'24.1%22N+45%C2%B056'05.8%22E/@24.40668,45.93493,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d24.40668!4d45.93493">الموقع</a>,</li>
                                                    
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
                            <li><a href="single-post.php">
                                <img src="home/wonderlandd3.png" alt="Recent Post 1">
                                <div class="text">
                                    <h6>رياض ونتر وندرلاند</h6>
                                    
                                </div>
                            </li></a>
                            <li><a href="single-post4.php">
                                <img src="home/nightGarden.jpg" alt="Recent Post 2">
                                <div class="text">
                                    <h6>الحدائق الليلية</h6>
                                    
                                </div>
                            </li></a>
                            <li><a href="single-post1.php">
                                <img src="home/boulevard.jpg" alt="Recent Post 3">
                                <div class="text">
                                    <h6>البوليفارد</h6>
                                    
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