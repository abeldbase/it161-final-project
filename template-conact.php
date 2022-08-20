<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Asharaye | Ethiopian Motivational platform. ኢትዮጵያዊ መነቃቂያ ገጽ!</title>
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/template-portal.css" />
    <link rel="stylesheet" href="css/template-nav.css" />
    <link rel="stylesheet" href="css/template-forms.css" />
  </head>
  <body>
    <header>
      <h1>ኢትዮጵያዊ መነቃቂያ ገጽ</h1>
      <nav class="topnav" id="myTopnav">
        <a href="template.html" class="active">Welcome</a>
        <a href="podcast.html">Podcast</a>
        <a href="blog.html">Blog</a>
        <a href="store.html">Asharaye Store</a>
        <a href="about.html">About Us</a>
      
        <a href="javascript:void(0);" class="icon" onclick="myFunction()"
          >&#9776;</a
        >
      </nav>
    </header>

    <div class="wrapper">
      
      <h2 class="subheader">Contact us!</h2>

      <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "asharaye.net@gmail.com ";  //place your/your client's email address here
        $toName = "Asharaye "; //place your client's name here
        $website = "Asharaye አሻራዬ መነቃቂያ ገፅ";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
  
      
          
        <p>
      <footer>
    </div>
    <midium
            >&copy; 2022 by <a href="template-contact.php">Asharaye</a>, All
            Rights Reserved | ተከተሉን
            <a href="https://twitter.com/mistre_nigussie"
              ><ion-icon name="logo-twitter"></ion-icon
            ></a>
            <a href="https://www.facebook.com/asharaye.myfootprint"
              ><ion-icon name="logo-facebook"></ion-icon
            ></a>
            <a id="html-checker" href="#">Check HTML</a> ~
            <a id="css-checker" href="#">Check CSS</a>
          </midium>
        </p>
      </footer>
    </div>

    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <script>
      //manages mobile nav
      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
    </script>
  </body>
</html>
