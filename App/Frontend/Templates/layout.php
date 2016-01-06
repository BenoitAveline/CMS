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
    <div id="wrap">
      <nav>
        <ul>
          <li><a href="/">Accueil</a></li>
          <li><a href="/admin/">Admin</a></li>
          <?php if ($user->isAuthenticated()) { ?>
            <li><a href="/admin/news-insert.html">Ajouter une news</a></li>
          <?php } ?>
            <li><a id="menumobile" href="">Accéder à : </a><div id="hiddenmobile"><?php $sidebar="
          <ul class=\"sidemenu\">
            <li><a href=\"news-2.html\">Mon CV</a></li>
            <li><a href=\"http://github.com/Rovhell\">Mon github</a></li>
          </ul>"; echo $sidebar?></div></li>
        </ul>
      </nav>

      <header>
        <h1><a href="/">Aveline&nbsp;&nbsp;Benoit</a></h1>
        <p><br/>A maker blog</p>
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
    </div>
  </body>
</html>