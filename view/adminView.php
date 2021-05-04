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
                                                <th>post</th>
                                                <th>Modération</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                        <?php
                                        foreach ($posts as $value):
                                            ?>
                                            <tr>
                                                <td><?php echo $value[0]["title"]; ?></td>
                                                <td><?php echo $actu[0]["chapo"]; ?></td>
                                                <td>2021-04-01 14:13:37</td>
                                                <td>2021-04-02 14:13:37
                                                </td>
                                                <td>Alyzera</td>
                                                <td>Le meilleur moyen de réaliser l’impossible est de ...
                                                </td>
                                                <td>
                                                    
                                                <a class="btn btn-warning" href="editView" role="button">
                                                <i class="fas fa-pen"></i>
                                                </a>
                                                    <a class="btn btn-danger operation" href="admin/deleteComment/" onclick="return confirm('Cette action supprimera ce post de façon permanente. Êtes vous sûr ?')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Mon chat me rend zen!</td>
                                                <td>C’est prouvé, le chat a un impact positif sur notr...</td>
                                                <td>2021-04-06 14:05:09</td>
                                                <td>2021-04-07 14:05:09
                                                </td>
                                                <td>Alyzera</td>
                                                <td>commentaires</td>
                                                <td>
                                                    
                                                    <a class="btn btn-warning" href="editView" role="button">
                                                    <i class="fas fa-pen"></i>
                                                        
                                                    </a>
                                                    <a class="btn btn-danger operation" href="editView" onclick="return confirm('Cette action supprimera ce post de façon permanente. Êtes vous sûr ?')">
                		                            <i class="fas fa-trash-alt"></i>
                	                                </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Ma détente se nomme Warhammer 40k.</td>
                                                <td>Pour se détendre après une journée de code, il n'y...</td>
                                                <td>2021-04-23 16:29:22</td>
                                                <td>2021-04-24 16:29:22</td>
                                                <td>Alyzera</td>
                                                <td>post</td>
                                                <td>
                                                    
                                                    <a class="btn btn-warning" href="editView" role="button">
                                                    <i class="fas fa-pen"></i>
                                                    </a>
                                                    <a class="btn btn-danger operation" href="admin/deleteComment/" onclick="return confirm('Cette action supprimera ce post de façon permanente. Êtes vous sûr ?')">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                                <td>
                                                    
                                                    <a class="btn btn-warning" href="editView" role="button">
                                                    <i class="fas fa-pen"></i>
                                                    </a>
                                                    <a class="btn btn-danger operation" href="admin/deleteComment/" onclick="return confirm('Cette action supprimera ce post de façon permanente. Êtes vous sûr ?')">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                                <td>
                                                    
                                                    <a class="btn btn-warning" href="editView" role="button">
                                                    <i class="fas fa-pen"></i>
                                                    </a>
                                                    <a class="btn btn-danger operation" href="admin/deleteComment/" onclick="return confirm('Cette action supprimera ce post de façon permanente. Êtes vous sûr ?')">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td>$372,000</td>
                                                <td>
                                                    
                                                    <a class="btn btn-warning" href="editView" role="button">
                                                    <i class="fas fa-pen"></i>
                                                    </a>
                                                    <a class="btn btn-danger operation" href="admin/deleteComment/" onclick="return confirm('Cette action supprimera ce post de façon permanente. Êtes vous sûr ?')">
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
                
