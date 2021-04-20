<!-- Header -->
<header class="post-view-head pb-5">
    <div class="container d-flex h-100 align-items-end">
        <div class="mx-auto text-center">
            
        <h1 class="mx-auto my-0 text-uppercase"><?php echo $actu[0]["title"] ?></h1>
            <div class="d-flex mt-4 align-items-center">
                
                <div class=" posts-informations" style="font-weight: bold">
                    <p class="mb-0">Posté par <strong><?php echo $actu[0]["User_idUser"]; ?></strong></p>
                    <p class="mb-0">Le <?php echo $actu[0]["dateCreation"]; ?></p>
                    <p class="mb-0">Dernière modification le <?php echo $actu["dateUpdate"]; ?></p>
                </div>
            </div>
        </div>

    </div>
</header>


<!-- Content -->


<!-- Post Section -->

<section class="bg-light">
    <div class="post-section row container-fluid mx-0 px-0">

        <!-- Blog post -->
        <div class="blog-post col-md-9 mx-auto px-0">
                    
            <!-- Post  content -->
            <div class="post-content px-4 px-md-5 mb-5">
               
                <h2 class="mb-4"><?php echo $actu[0]["title"] ?> </h2>
                <hr class="d-none d-lg-block mb-0 ml-0" />

                <p><?php echo $actu[0]["description"]; ?></p>

                 <div class="post-picture my-3" style="background-image: url('public/uploads/1584900905.9505_qg9zre8hcw.jpg');">     
                </div>
            </div>

            <!-- Comments section -->

            <div class="post-comments px-4 px-md-5 mb-5" id="comments-section">
                <h2>Commentaires</h2>
                <hr class="d-none d-lg-block ml-0">
                <p><?php echo $actu[0]["userComment"]; ?></p>

                <a href="login" class="btn btn-primary mx-auto">Se connecter pour commenter</a>
                

                                    
                
            </div>         

        </div>


        <!-- Right column -->

        <div class="blog-right-col col-md-3 col-12 mx-auto px-4 pl-md-0 pr-md-4">

            <div class="blog-right-col-div mb-3">
                <h4 class="mb-4">Catégories</h4>
                    <div>
                        <a class="btn btn-outline-secondary" href="#">bonheur </a>
                    </div>
            </div>

                           

            <div class="blog-right-col-div recent-posts mb-5">
                <h4 class="mb-4">Articles récents</h4>
                <div class="recent-post">
                                            <h5>Cette génération qui change de vie <em> (posté le 22-03-2020)</em></h5>
                        <p>De plus en plus de cadre, de t... - <a href="index.php?action=postView&amp;id=18">En savoir plus</a></p>

                                            <h5>La taille des pierres<em> (posté le 22-03-2020)</em></h5>
                        <p>Tailler des pierres c&#039;est... - <a href="index.php?action=postView&amp;id=17">En savoir plus</a></p>

                                            <h5>Praesent ut ligula<em> (posté le 22-03-2020)</em></h5>
                        <p>Etiam vitae tortor. Curabitur ... - <a href="index.php?action=postView&amp;id=16">En savoir plus</a></p>

                                          
                </div>
            </div>

        </div>
    </div>


</section>