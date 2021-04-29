<!-- Header -->


<header class="post-view-head pb-5">
    
    <div class="container d-flex h-100 align-items-end">

        <div class="mx-auto text-center">
            
            <h1 class="mx-auto my-0 text-uppercase">
                <?php echo $actu[0]["title"] ?>
            </h1>
        
            <div class="d-flex mt-4 align-items-center">
                
                <div class=" posts-informations" style="font-weight: bold">
                    <p class="mb-0">
                        Posté par <strong><?php echo $actu[0]["User_idUser"]; ?></strong>
                    </p>
                    <p class="mb-0">
                        Le <?php echo $actu[0]["dateCreation"]; ?>
                    </p>
                    <p class="mb-0">
                        Dernière modification le <?= $actu[0]["dateUpdate"];?>
                    </p>
                    
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

                
            </div>

            <!-- Comments section -->
            
            <div class="post-comments px-4 px-md-5 mb-5" id="comments-section">
            
                <h2>Commentaires</h2>
                <hr class="d-none d-lg-block ml-0">
                <?php
                    foreach ($actus as $value){ ?>
                <p>
                    Posté par <?php echo $actu[0]["userComment"]; ?>
                    <?php echo $actu[0]["comment"]; ?>
                    Le<?php echo $actu[0]["commentDate"]; ?>
                </p>
                <?php

                }
                ?>
                <a href="/mvc/login" class="btn btn-primary mx-auto">
                    Se connecter pour commenter
                </a>

                <div class="input-group">

                    <span class="input-group-text">
                        Votre commentaire
                    </span>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                        Valider
                    </button>
                </div>
                                    
               
            </div>         
            
        </div>


        <!-- Right column -->

        <div class="blog-right-col col-md-3 col-12 mx-auto px-4 pl-md-0 pr-md-4">

            <!-- <div class="blog-right-col-div mb-3">
                <h4 class="mb-4">Catégories</h4>
                    <div>
                        <a class="btn btn-outline-secondary" href="#">bonheur </a>
                    </div>
            </div> -->

                           

            <div class="blog-right-col-div recent-posts mb-5">
                <h4 class="mb-4"> <strong>Articles récents</strong> </h4>
                <hr class="d-none d-lg-block mb-0 mr-0" />
                <div class="recent-post">
                        <h5>Femmes dans la tech, montrez-vous ! </h5>
                        <p>
                        Les femmes sont encore trop peu nombreuses dans les métiers de la science et des hautes technologies...- 
                            <a href="#">
                                <strong> En savoir plus</strong>
                            </a>
                        </p>
                        <hr class="d-none d-lg-block mb-0 mr-0" />
                            <h5>Mon chat me rend zen !</h5>
                        <p>
                            C’est prouvé, le chat a un impact positif sur notre vie... - 
                            <a href="postView/2">
                            <strong> En savoir plus</strong>
                            </a>
                        </p>
                        <hr class="d-none d-lg-block mb-0 mr-0" />
                            <h5>Ma détente se nomme Warhammer 40k.</h5>
                        <p>
                            Etiam vitae tortor. Curabitur blandit mollis quisquam vero ... - 
                            <a href="postView/3">
                            <strong> En savoir plus</strong>
                            </a>
                        </p>
                        <hr class="d-none d-lg-block mb-0 mr-0" />

                                          
                </div>
            </div>

        </div>
    </div>


</section>