<?php ob_start(); ?>
<h1>Mon super blog !</h1>
<p><a href="/index.php">Retour à la liste des billet</a></p>
  

 <?php $commentId = isset($_GET['id']) ? ($_GET['id']) : NULL;
 $newComment = isset($_POST['newComment']) ? ($_POST['newComment']) : NULL;
 $postId = isset($_GET['postID']) ? ($_GET['postID']) : NULL;
 
 
 ?>
  <?php var_dump($commentId); ?>
 <h2>Editer le commentaire n°<?= $commentId ?></h2>
  
<form action="index.php?action=editComment&id=<?= $postId ?>&postID=<?= $commentId ?>" method="post">
        <p><label for="author">Auteur</label>
        <input type="text" name="author" id="author" value="<?=htmlspecialchars($newComment);?>">
        <label for="newComment">Nouveau commentaire</label><br />
        <textarea id="newComment" name="newComment" value = "<?=htmlspecialchars($newComment);?>"></textarea>
        
    </div>
    <div>
        <input type="Submit" />
    </div>
</form>
<?php
$content = ob_get_clean(); ?>
  
<?php require('template.php'); ?>
