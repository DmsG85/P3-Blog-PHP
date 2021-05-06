<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Articles
                                
                            </div>
                             
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Titre</th>
                                                <th>Description</th>
                                                <th>Date création</th>
                                                <th>Date modification</th>
                                                <th>Auteur</th>
                                                <th>Post</th>
                                                <th>Modération</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                        <?php foreach ($posts as $value): ?>
                                            <tr>
                                                <td><?php echo $value["title"]; ?></td>
                                                <td><?php echo $value["chapo"]; ?></td>
                                                <td><?php echo $value["dateCreation"]; ?></td>
                                                <td><?php echo $value["dateUpdate"]; ?></td>
                                                </td>
                                                <td><?php echo $value["user"]['username']; ?></td>
                                                <td><?php echo $value["description"]; ?></td>
                                                <td>
                                                    
                                                <a class="btn btn-warning" href="<?php echo $this->rewritebase."admin/postEdit/".$value["idPost"];?>" role="button">
                                                <i class="fas fa-pen"></i>
                                                </a>
                                                    <a class="btn btn-danger operation" href="<?php echo $this->rewritebase."admin/postDelete/".$value["idPost"];?>" onclick="return confirm('Cette action supprimera ce post de façon permanente. Êtes vous sûr ?')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    <p><i class="fas fa-pen-alt"></i> = Modifier</p>   
                            <p><i class="fas fa-trash-alt"></i> = Supprimer</p> 
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                
