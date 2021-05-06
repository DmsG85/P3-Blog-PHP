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
                <th>Status</th>
                <th>Auteur</th>
                <th>PostId</th>
                <th>Opérations</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($commentsView as $comment){ ?>
           
              <tr>
                <td><?php echo $comment["idComment"]; ?></td>
                <td><?php echo $comment["comment"]; ?></td>
                <td><?php echo $comment["commentDate"]; ?></td>
                <td><?php echo $comment["statut"]; ?></td>
                <td><?php echo $comment["User_idUser"]; ?></td>
                <td><?php echo $comment["Post_idPost"]; ?></td>
                <td>
					<a class="btn btn-success operation" href="<?php echo $this->rewritebase."admin/commentEnable/".$comment["idComment"];?>">
						<i class="fas fa-check"></i>
					</a>
                	<a class="btn btn-danger operation" href="<?php echo $this->rewritebase."admin/commentDelete/".$comment["idComment"];?>" onclick="return confirm('Cette action supprimera ce commentaire de façon permanente. Êtes vous sûr ?')">
                		<i class="fas fa-trash-alt"></i>
                	</a>

                </td>
              </tr>
              <?php 
            } 
            ?>
            </tbody>
            </table>
        </div>
      
    </div>
  </div>
</div>