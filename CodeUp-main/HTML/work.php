<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/work.css">
    <link rel="stylesheet" type="text/css" href="../CSS/navigation.css">
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
      <h1>Our Work</h1>
    <div class="work-container">
      <div class="card">
        <img src="../MEDIA/nirpro.png">
        <div class="content">
          <h3>Nirvana</h3>
          <p>Music Band</p>
          <a href="https://pradhan21.github.io/kurt-cobain/" target="_blank">read more</a>
        </div>
      </div>

      <div class="card">
        <img src="../MEDIA/saurav.png">
        <div class="content">
          <h3>Asphen Gallery</h3>
          <p>Photography Portfolio</p>
          <a href="https://sauravasphen.github.io/asphenphotos/index.html" target="_blank">read more</a>
        </div>
      </div>

      <div class="card">
        <img src="../MEDIA/aniraj.png">
        <div class="content">
          <h3>Interactive Resume</h3>
          <p>A brief website of personal resume</p>
          <a href="https://aniraj1.github.io/Website/#Profile" target="_blank">read more</a>
        </div>
      </div>

      <div class="card">
        <img src="../MEDIA/Capture.png">
        <div class="content">
          <h3>Cyberpunk 2077</h3>
          <p>Game reference Website</p>
          <a href="https://forlorn4eva.github.io/cyber/" target="_blank">read more</a>
        </div>
      </div>
    </div>
    <div class="contactus-link">
      <a href="contactus.php">Grab Yours Now!</a>
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
