
<!-- Masthead-->
<header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase"> 
                        <strong>Bienvenue sur mon blog</strong> 
                    </h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">
                        Actu,developpement, un peu de tout
                    </h2>
                    <a class="btn btn-primary js-scroll-trigger" href="#posts-list">
                        En savoir plus
                    </a>
                </div>
            </div>
        </header>
<!-- Postlist Section -->
<br>
<br>
<section class="profile-section bg-light">
    <div class="row container-fluid mx-auto">

        <!-- Posts list -->
        <div id="posts-list" class="posts-list col-lg-9 col-sm-10 mx-auto">

        <!-- Blog post  -->
        <?php
        foreach ($actus as $value){ ?>
        <div class="col-lg-11 bg-black justify-content-center no-gutters mb-4 py-auto mx-auto">
                <div class="post-text d-flex h-100 flex-column justify-content-between  px-2 px-md-4 py-4">
                        <div class="d-flex flex-md-row flex-column">

                            <div class="post-list-picture col-md-4 col-12">
                                <img src="public/img/business-woman" class="img-thumbnail" alt="">    
                            </div>
                                                                    
                            <div class="post-chapo col-md-8 col-12 text-center text-lg-left pl-md-4 pt-2 px-0">
                                <h4 class="text-white"><?php echo $value["title"]; ?></h4>
                                <p class="mb-3 text-white-50 text-justify">
                                    <?php echo $value["chapo"]; ?>
                                </p>
                                <hr class="d-none d-lg-block mb-0 mr-0" />
                                <a class="btn btn-primary " href="<?php echo $this->rewritebase;?>postView/<?php echo $value['idPost'];?>">
                                Lire la suite...
                                </a>
                                
                            </div>
                        </div>
                                    
                        <div class="post-author d-flex mt-4 align-items-center">
                            <div class="avatar mr-3">
                            </div>
                            <div class="text-white-50 posts-informations">
                                <p class="mb-0">
                                    Posté par <strong><?php echo $value["user"]['username']; ?></strong> 
                                </p>
                                <p class="mb-0">
                                    <?php echo $value["dateCreation"]; ?>
                                </p>
                                <p class="mb-0">
                                    Dernière modification le <?php echo $value["dateUpdate"]; ?> 
                                </p>
                            </div>
                        </div>
                </div>
        </div>
            <?php

        }
        ?>
 
    </div>


</section>
