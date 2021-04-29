<!--  Content  -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
    <p class="help-block text-danger"></p>
    <p class="help-block text-success"></p>
        <h2>Gestion des commentaires non-modérés</h2>
        <p><i class="fas fa-check"></i> = Valider le commentaire</p>   
        <p><i class="fas fa-trash-alt"></i> = Supprimer le commentaire</p>                                                                   
        <div class="table-responsive">      
            <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th>Id</th>
                <th>Contenu</th>
                <th>Date de création</th>
                <th>Auteur</th>
                <th>PostId</th>
                <th>Opérations</th>
              </tr>
            </thead>
            <tbody>
            
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
					<a class="btn btn-success operation" href="admin/enableComment/">
						<i class="fas fa-check"></i>
					</a>
                	<a class="btn btn-danger operation" href="admin/deleteComment/" onclick="return confirm('Cette action supprimera ce commentaire de façon permanente. Êtes vous sûr ?')">
                		<i class="fas fa-trash-alt"></i>
                	</a>

                </td>
              </tr>
           
            </tbody>
            </table>
        </div>
      
    </div>
  </div>
</div>