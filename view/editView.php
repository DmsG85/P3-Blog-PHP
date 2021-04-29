
<!--  Content  -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <h2>Editer un post</h2>
      
      <form method="post" action="admin/updatePost" id="updatePostForm" novalidate>
        <div class="control-group">
          <div class="form-group controls">
            <label for="title">Titre</label>
            <input name="title" value="" type="text" class="form-control" placeholder="Titre" id="title" required data-validation-required-message="Veuillez renseigner ce champ.">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        
        <div class="control-group">
          <div class="form-group controls">
            <label for="chapo">Chapo</label>
            <input name="chapo" value="" type="text" class="form-control" placeholder="Chapo" id="chapo" required data-validation-required-message="Veuillez renseigner ce champ.">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        
        <div class="control-group">
          <div class="form-group controls">
            <label for="content">Contenu</label>
            <textarea name="content" rows="10" type="text" class="form-control" placeholder="Content" id="description" required data-validation-required-message="Veuillez renseigner ce champ."></textarea>
            <p class="help-block text-danger"></p>
          </div>
        </div>
        
        <input name="id" type="hidden" value="">
        
        <br>
        <div id="success"></div>
        <div class="form-group">
          <button type="submit" name="submitted" class="btn btn-primary" value="submitted" id="">Modifier le post</button>
        </div>
      </form>
      
    </div>
  </div>
</div>