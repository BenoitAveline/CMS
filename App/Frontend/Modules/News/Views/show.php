<h2><?= $news['titre'] ?>
  <?php if ($user->isAuthenticated()) { ?>
    <span class="action"><a href="admin/news-update-<?= $news['id'] ?>.html"><img src="/images/update.png" alt="Modifier" /></a> <a href="admin/news-delete-<?= $news['id'] ?>.html"><img src="/images/delete.png" alt="Supprimer" /></a></span>
  <?php } ?></h2>
<p><?= nl2br($news['contenu']) ?></p>

<?php if ($news['dateAjout'] != $news['dateModif']) { ?>
  <p style="text-align: right;"><small><em>Modifiée le <?= $news['dateModif']->format('d/m/Y à H\hi') ?></em></small></p>
<?php } ?>
<br/>
<p>Par <em><?= $news['auteur'] ?></em>, le <?= $news['dateAjout']->format('d/m/Y à H\hi') ?></p>
<br/>

<?php/*
if (empty($comments))
{
?>
<p>Aucun commentaire n'a encore été posté. Soyez le premier à en laisser un !</p>
<?php
}

foreach ($comments as $comment)
{
?>
<fieldset>
  <legend>
    Posté par <strong><?= htmlspecialchars($comment['auteur']) ?></strong> le <?= $comment['date']->format('d/m/Y à H\hi') ?>
    <?php if ($user->isAuthenticated()) { ?> -
      <a href="admin/comment-update-<?= $comment['id'] ?>.html">Modifier</a> |
      <a href="admin/comment-delete-<?= $comment['id'] ?>.html">Supprimer</a>
    <?php } ?>
  </legend>
  <p><?= nl2br(htmlspecialchars($comment['contenu'])) ?></p>
</fieldset>
<?php
}
?>

<p><a href="commenter-<?= $news['id'] ?>.html">Ajouter un commentaire</a></p>
<?php
//*/
?>