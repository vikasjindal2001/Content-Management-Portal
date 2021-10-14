<?php
        
        include('config.php');
 $execute = "SELECT * FROM `header`";
     $row = @mysqli_query($link,$execute) or die("<br>query could not executed");
     while($column = mysqli_fetch_row($row))
     {
 
         ?>




<header class="site-header">
        <div class="top-header-bar " background-color="#12154a">
            <div class="container">
                <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">
                    <div class="col-12 col-lg-8 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                        <div class="header-bar-email">
                            Welcome in <?php echo $column[1];?>
                        </div><!-- .header-bar-email -->

                        <div class="header-bar-text">
                            <p>Call us @ <span>+91 <?php echo $column[3];?></span></p>
                        </div><!-- .header-bar-text -->
                    </div><!-- .col -->

                    <div class="col-12 col-lg-4 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                        <div class="donate-btn">
                            <a href="register.php">Enroll Now</a>
                        </div><!-- .donate-btn -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .top-header-bar -->

        <div class="nav-bar navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                           <a class="d-block" href="index.html" rel="home">
                           <img class="d-block" src="Photo/<?php echo $column[2];?>" alt="logo"></a>
                        </div><!-- .site-branding -->

                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                                <li class="current-menu-item"><a href="index.php">Home</a></li>
                                <li><a href="about.php">About us</a></li>
                                <li><a href="courses.php">Courses</a></li>
                                <li><a href="portfolio.php">Gallery</a></li>
                                <!--<li><a href="news.html">News</a></li>-->
                                <li><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </nav><!-- .site-navigation -->

                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .nav-bar -->
    </header><!-- .site-header -->

    <?php
    }
    ?>