<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../CSS/navigation.css">
    <link rel="stylesheet" type="text/css" href="../CSS/aboutus.css">
    <script type="text/javascript" src="../JS/menu.js"></script>
  </head>
  <body>
    <header>
      <div class="nav-logo">
        <a href="mainpage.php">
          <img src="../MEDIA/logo.png" alt="logo">
          <span>CodeUp</span>
        </a>
      </div>
    </header>
    <div class="menu-bar" onclick="menuslide()">
      <img src="../MEDIA/menu.png">
    </div>
    <div id="menu" onclick="menuslide()">
      <ul>
        <li><a href="mainpage.php">Home</a></li>
        <li><a href="work.php">Our Work</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
        <li><a href="#" onclick="Popup()">Client Portal</a></li>
      </ul>
    </div>
    <div class="popup" id="popup-1">
            <span onclick="Popup()" class="close">X</span>
                <h4>Login</h4>
            <form class='login-form' method="post" action="PortalLogin.php">
              <div class='radio-div'>
                <input id="1" type='radio' name="acc-type" class="acc-radiobutton" value="company" checked>
                <label for="1" class='acc-label'>Company</label>
                <input id="2" type='radio' name="acc-type" class="acc-radiobutton" value="agent">
                <label for="2" class='acc-label'>Agent</label>
                <input id="3" type='radio' name="acc-type" class="acc-radiobutton" value="admin">
                <label for="3" class='acc-label'>Admin</label>
              </div>
              <div class="credential">
                <input type='text' class='input-field' placeholder='Username' name="username" required>
                <input type='password'class='input-field' placeholder='Password' name="password" required>
              </div>
              <button type='submit' class='sign-in'>Sign In</button>
            </form>
    </div>
      <div class="head">
            <div class="about">
                  <h1> Creavity <br> Meets Technology</h1>
            </div>
      </div>

      <div class="img-parallax1">
      </div>

      <div class="body1">
            <div class="sub-body">
                <div class="sub1">
                  <h2>Our Goal</h2>
                </div>
                <div class="sub2"><p>From the moment our company was founded, we have helped our clients find exceptional solutions for their businesses , creating memorable brands and digital products. Our expertise grows with each year, and our accumulated experience empowers us to develop products exactly as they should be.</p></div>
            </div>
      </div>

      <div class="img-parallax2">
      </div>

      <div class="body2">
                <div class="heading2"> <h1>Simply put, we dare <br>what others don't</h1> </div>
                <div class="sub-body2">
                    <div class="body2-part1">
                        <p>We make things, and we're awesome at it. CodeUp is a tight-knit team of experts who are ready to tackle the most intricate puzzles when it comes to websites and mobile apps development. We love what we do and we bet on the success of each and every project we undertake.</p>
                    </div>
                    <br>
                    <div class="body2-part2">
                        <p>Mainstream? No, thanks. Because it's not just work, it's passion. It's not just clients, it's people. Every project we take on is important to us, and every client is a big deal. We take care of your projects, your deadlines, and your nerves no matter what, and that’s a promise.</p>
                    </div>
                </div>
      </div>

      <div class="img-parallax3">
      </div>

      <div class="body3">
                <div class="heading3"> <h1>Get to know us, <br> see what's up</h1> </div>
                <div class="sub-body3">
                    <div class="body3-part1">
                        <p>Four students from Apex College built this websites in 2021. Initially, we created this website for college project.</p>
                    </div>
                    <br>
                    <div class="body3-part2">
                        <p>Today, CodeUp has grown to a full-cycle agency with attested design expertise. We are the Awwwards Agency of the Year, are in the TOP 10 design agencies according to the most popular design communities in the world, receive international awards for our exceptional products, work with large companies all over the world, teach our own design courses, and gladly share our expertise with you.</p>
                    </div>
                </div>
      </div>
      <div class="footer">
        <div class="footer-idea">
          <a href="contactus.php">Have an idea?<br>Tell us about it.</a>
        </div>
        <div class="footer-email">
          <h3>info@codup.com</h3>
          <span>1261 Devkota Sadak Mid Baneshor<br>Kathmandu, Nepal</span>
        </div>
        <div class="footer-logo">
          <a href="mainpage.php"><img src="../MEDIA/logo.png" alt="logo"></a>
        </div>
        <div class="copyright">
          ©2021 COPYRIGHT<br>BY CODEUP
      </div>
  </body>
</html>
