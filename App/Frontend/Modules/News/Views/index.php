<?php
foreach ($listeNews as $news)
{
?>
  <article><h2><a href="news-<?= $news['id'] ?>.html"><?= $news['titre'] ?></a></h2>
    <div class="article_body"><?= nl2br($news['contenu']) ?> <div class="grade"></div> </div><a class="suite" href="news-<?= $news['id'] ?>.html"> Lire la suite !</a></article>
<?php
}
