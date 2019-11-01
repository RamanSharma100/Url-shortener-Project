<!-- <script type='text/javascript'>
            var shrtlink = document.getElementById('shortlink');

            shrtlink.style.display = 'block';
        
        </script> -->
<?php
    session_start();
    if(isset($_GET['link_shrt'])){
        echo "
        
        <style>

        	.main .banner .info .shortlink{
        		display:block !important;
        	}

        </style>
        
        ";
    }
    if(isset($_GET['error'])){
        echo "
        
        <script>
            alert('".$_GET['error']."');
        
        </script>
        
        ";
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=7">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>shortlinker--ease the link</title>
        <link rel="stylesheet" type="text/css" href="css/index.css" />
    </head>
    <body>
        <div class="main">
          <!-- navbar   -->
          <header class="navigation-bar">
            <div class="logo">
                <a href="index.php" class="logo-link">
                    <span class="logos">SL</span>
                    <span>S</span>hort<span>L</span>inker
                </a>
            </div>
            <!-- menu -->
            <div class="Login-out">
                <h4 class="status-user">
                    Welcome,<span>Guest</span>
                </h4>
                <h1>|</h1>
                <a href="#" class="login">Login</a>
                <a href="#" class="logout">Logout</a>
            </div>
          </header>
          <!-- banner -->
          <div class="banner">
            <img src="images/images.jfif" />
            <div class="info">
                <h1 class="heading">
                    SHORT LINKER
                </h1>
                <h3 class="sub-heading">
                    Best Link Shortner
                </h3>
                <form action="php/linkshortener.php" method="post">
                    <input type="text" name="link-input" id="link-input" placeholder="Enter URL"/>
                    <input type="submit" value="SHORT LINK" name="link-short-submit" class="short-link-submit"/>
                </form>
                <div class="shortlink" id="shortlink">
                    <h1 class="short-link-heading">
                        Entered Link
                    </h1>
                    <p class="link-short" id="link-short">
                        <?php
                            if(isset($_GET['link_shrt'])){
                                echo $_SESSION['link'];
                            }
                        ?>
                    </p>
                    <h1 class="short-link-heading">
                        Shorted Link
                    </h1>
                    <p class="link-short" id="link-short">
                        <?php
                            if(isset($_GET['link_shrt'])){
                                echo "<a href='www.shortlinker.com/index.php?link=".$_SESSION['shrt_link']."' target='_blank'>www.shortlinker.com/index.php?link=".$_SESSION['shrt_link']."</a>";
                            }
                        ?>
                    </p>
                </div>
                <div class="example">
                    <h1 class="example-heading">An example</h1>
                    <h2 class="example-sub-heading">Turn this URL:</h2>
                    <p class="link-example"> http://www.amazon.com/Kindle-Wireless-Reading-Display-Globally/dp/B003FSUDM4/ref=amb_link_353259562_2?pf_rd_m=ATVPDKIKX0DER&pf_rd_s=center-10&pf_rd_r=11EYKTN682A79T370AM3&pf_rd_t=201&pf_rd_p=1270985982&pf_rd_i=B002Y27P3M</p>
                    <h2 class="example-sub-heading">into this Short Link:</h2>
                    <p class="link-example">www.shortlinker.com/index.php?link_shrt=d1565</p>
                    Which one would you rather cut and paste into your browser? That's the power of Short Linker
                </div>
            </div>
          </div>
          
        

          <!-- footer -->
            <div class="footer">
                    Copyright ©️ 2019 <span>Raman Sharma</span>. All rights reserved | <a href="#">Terms of use</a> | <a href="#">Privacy policy - <span>Revised</span></a>
                    <p class="footer-sub">
                        11901731 Raman Sharma (+919877270616)
                    </p>
            </div>
        </div>
    </body>
</html>