
<!--  Content  -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
    <?php if (isset($post)) :?>
      <h2>Editer un post</h2>
    <?php else: ?>
      <h2>Crée un post</h2>
    <?php endif ?>

      <form method="post" action="#" id="updatePostForm" novalidate>
        <div class="control-group">
          <div class="form-group controls">
            <label for="title">Titre</label>
            <input name="title" value="<?php if (isset($post)) {echo $post['title'];}?>" type="text" class="form-control" placeholder="Titre" id="title" required data-validation-required-message="Veuillez renseigner ce champ.">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        
        <div class="control-group">
          <div class="form-group controls">
            <label for="chapo">Chapo</label>
            <input name="chapo" value="<?php if (isset($post)) {echo $post['chapo'];}?>" type="text" class="form-control" placeholder="Chapo" id="chapo" required data-validation-required-message="Veuillez renseigner ce champ.">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        
        <div class="control-group">
          <div class="form-group controls">
            <label for="content">Contenu</label>
            <textarea name="content" rows="10" type="text" class="form-control" placeholder="Content" id="description" required data-validation-required-message="Veuillez renseigner ce champ."><?php if (isset($post)) {echo $post['description'];}?></textarea>
            <p class="help-block text-danger"></p>
          </div>
        </div>
        
        <input name="id" type="hidden" value="<?php if (isset($post)) {echo $post['idPost'];}?>">
        
        <br>
        <div id="success"></div>
        <div class="form-group">
          <button type="submit" name="submit" class="btn btn-primary" value=1>Modifier le post</button>
        </div>
      </form>
      
    </div>
  </div>
</div>