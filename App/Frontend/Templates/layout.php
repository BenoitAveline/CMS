<!DOCTYPE html>
<html>
  <head>
    <title>
      <?= isset($title) ? $title : 'www.avelinebenoit.fr' ?>
    </title>
    
    <meta charset="utf-8" />
    
    <link rel="stylesheet" href="/css/Envision.css" type="text/css" />
  </head>
  
  <body>
  <?php include_once("analyticstracking.php") ?>
    <div id="wrap">
      <nav>
        <ul>
          <li><a href="/">Accueil</a></li>
          <li><a href="/admin/">Admin</a></li>
          <?php if ($user->isAuthenticated()) { ?>
            <li><a href="/admin/news-insert.html">Ajouter une news</a></li>
          <?php } ?>
            <li><a id="menumobile" href="#">Accéder à : </a><div id="hiddenmobile"><?php $sidebar="
          <ul class=\"sidemenu\">
            <a href=\"news-2.html\"><li>Mon CV</li></a>
            <a href=\"http://github.com/Rovhell\"><li>Mon github</li></a>
          </ul>"; echo $sidebar?></div></li>
        </ul>
      </nav>

      <header>
        <a href="/"><h1>Aveline&nbsp;&nbsp;Benoit</h1>
        <p>A maker blog</p></a>
      </header>

      <div id="content-wrap">
        <section id="sidebar">
            <h3>Accéder à : </h3>
          <?php echo $sidebar; ?>
        </section>
        <section id="main">
          <?php if ($user->hasFlash()) echo '<p style="text-align: center;">', $user->getFlash(), '</p>'; ?>
          
          <?= $content ?>
        </section>
      </div>

        <a id="top_arrow" href="#wrap">A</a>

    
      <footer>PHP and CSS Templates by Benoît Aveline</footer>
      <script>
        window.onscroll = function() {showArrow()};

        function showArrow() {
          if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
            document.getElementById("top_arrow").className = "show_arrow";
          } else {
            document.getElementById("top_arrow").className = "hide_arrow";
          }

        }
      </script>
    </div>
  </body>
</html>