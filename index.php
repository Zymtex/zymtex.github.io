<?php

?>





<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial scale=1">

    <title>Zymtex | Website</title>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
  </head>

  <body>
    <!--- Header ------------------------------------------------------------>
      <header>
        <div id="logo">
          <a href="https://www.youtube.com/channel/UCMfcVi3B_ue3lDDrDUTlNTQ" target="_blank">
            <img src="img/logo.png" alt="LOGO">
          </a>
        </div>

        <nav id="main-nav">
          <ul>
            <a href="#home"><li>Home</li></a>
            <a href="#about"><li>About</li></a>
            <a href="#work"><li>Work</li></a>
            <a href="#social-media"><li>Social Media</li></a>
            <a href="#contact"><li>Contact</li></a>
            <a href="login.php"><li>Login</li></a>
          </ul>
        </nav>
      </header>


    <!--- Home ------------------------------------------------------------>
      <section id="home">
        <hr>
        <h1>Zymtex</h1>
        <h2>- ザビエル -</h2>
        <a href="#about">
            <img src="img/pfeil.png" alt="Pfeil">
        </a>
      </section>

      <section id="about">
        <h3>About</h3>
        <hr>
        <img src="img/Avatar.png" alt="Avatar">
        <h4>Xavier / Zymtex</h4>
        <p>Mein Name ist Zymtex, ich bin 17 Jahre alt und in meiner Freizeit beschäftige ich mit Spielen wie zum Beispiel World of Warcraft, CS:GO oder auch osu!. In meiner restlichen Freizeit setze ich mit dem Coden auseinander und habe dementsprechend diese Website entworfen.</p>
      </section>


    <!--- Work ------------------------------------------------------------>
      <section id="work">
        <h3>Work</h3>
        <hr>
        <div id="projects">
          <ul>
            <li><a href="#"><img src="http://via.placeholder.com/1280x720" alt="Projekt_01"></a></li>
            <li><a href="#"><img src="http://via.placeholder.com/1280x720" alt="Projekt_02"></a></li>
          </ul>
        </div>
      </section>

      <!--- SocialMedia ------------------------------------------------------------>
        <section id="social-media">
          <h3>Social Media</h3>
          <hr>
          <div id="sm_icons">
            <ul>
              <li><a href="https://www.youtube.com/channel/UCMfcVi3B_ue3lDDrDUTlNTQ" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
              <li><a href="https://twitter.com/TheZymtex" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="https://www.twitch.tv/zymtex" target="_blank"><i class="fa fa-twitch" aria-hidden="true"></i></a></li>
              <li><a href="https://plus.google.com/100877382460797250680" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
              <li><a href="http://steamcommunity.com/id/Zymtex/" target="_blank"><i class="fa fa-steam" aria-hidden="true"></i></a></li>
              <li><a href="https://github.com/Zymtex" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </section>


    <!--- Contact ------------------------------------------------------------>
      <section id="contact">
        <h3>Contact</h3>
        <hr>
        <form>
          <input class="input_text" type="email" tabindex="1" placeholder="E-Mail"><br>
          <input class="input_text" type="Betreff" tabindex="2" placeholder="Betreff"><br>
          <textarea class="input_text" tabindex="3" placeholder="Nachricht"></textarea><br>
          <input class="button" type="submit">
        </form>
      </section>



    <!--- Fußzeile ------------------------------------------------------------>
      <footer>
        <p>
          &copy; 2014-2018 Zymtex
        </p>
      </footer>

  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
  <script src="js/mobile-menu.js"></script>
  </body>
</html>
