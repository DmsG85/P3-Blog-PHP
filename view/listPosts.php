
<!-- Masthead-->
<header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase"> <strong>Bienvenue sur mon blog</strong> </h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Actu,developpement, un peu de tout</h2>
                    <a class="btn btn-primary js-scroll-trigger" href="#posts-list">En savoir plus</a>
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
                                <p class="mb-3 text-white-50 text-justify"><?php echo $value["chapo"]; ?></p>
                                <hr class="d-none d-lg-block mb-0 mr-0" />
                                <a class="btn btn-primary " href="postView/<?php echo $value['idPost'];?>">Lire la suite...</a>
                                <!-- <span class="btn btn-outline-secondary mx-1 my-1">woman </span>-->
                            </div>
                        </div>
                                    
                        <div class="post-author d-flex mt-4 align-items-center">
                            <div class="avatar mr-3">
                            </div>
                            <div class="text-white-50 posts-informations">
                                <p class="mb-0">Posté par <strong><?php echo $value["User_idUser"]; ?></strong> </p>
                                <p class="mb-0"><?php echo $value["dateCreation"]; ?></p>
                                <p class="mb-0">Dernière modification le <?php echo $value["dateUpdate"]; ?> </p>
                            </div>
                        </div>
                </div>
        </div>
            <?php

        }
        ?>
   
            <!-- Post list navigation -->

            <div class="row container justify-content-center mt-5">
                <nav aria-label="post-navigation">
                    <ul class="pagination post-pagination">
                        <li class="page-item">
                                                            <button class="page-link" disabled aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </button>
                                                        </li>

                        <li class="page-item"><a class="page-link" href="index.php?action=listPosts;page=1;postsPerPage=3#posts-list">1</a></li>
                        <li class="page-item"><a class="page-link" href="index.php?action=listPosts;page=2;postsPerPage=3#posts-list">2</a></li>
                        <li class="page-item"><a class="page-link" href="index.php?action=listPosts&page=2;postsPerPage=3#posts-list" aria-label="Next">
                             <span aria-hidden="true">&raquo;</span>
                              <span class="sr-only">Next</span>
                            </a>
                        </li>
                        
                    </ul>
                </nav>
            </div>
            

        </div>

        <!-- Right column -->

        <div class="blog-right-col col-lg-3 col-sm-10 pl-0 mx-auto">
            <div class="blog-right-col-div nb-posts mb-5">
                <h4 class="mb-4">Nombre de posts par page</h4>
                <form action="index.php#posts-list" method="GET">
                    <input type="hidden" name="action" value="listPosts"/>
                    <label for="postsPerPage" hidden>Nombre de posts par page</label>
                    <select class="form-control block" id="postsPerPage" name="postsPerPage">
                                                    <option value="3" selected disabled>3</option>
                            <option value="5">5</option>
                            <option value="10">10</option>
                            
                    </select>
                    <input class="btn btn-primary-custom mt-3" type="submit" value="Afficher"/>
                </form>
            </div>
            <div class="blog-right-col-div recent-posts mb-5">
                <h4 class="mb-4"> <strong> Articles récents</strong></h4>
                <hr class="d-none d-lg-block mb-0 mr-0" />
                <div class="recent-post">
                                            <h5>Femmes dans la tech, montrez-vous ! <em> (posté le 22-03-2020)</em></h5>
                        <p>De plus en plus de cadre, de tout âge, changent d... - <a href="postView/1"><strong> En savoir plus</strong></a></p>
                        <hr class="d-none d-lg-block mb-0 mr-0" />
                                                <h5>Mon chat me rend zen !<em> (posté le 22-03-2020)</em></h5>
                        <p>C’est prouvé, le chat a un impact positif sur notre vie... - <a href="postView/2"><strong> En savoir plus</strong></a></p>
                        <hr class="d-none d-lg-block mb-0 mr-0" />
                                                <h5>Ma détente se nomme Warhammer 40k.<em> (posté le 22-03-2020)</em></h5>
                        <p>Etiam vitae tortor. Curabitur blandit mollis lacus... - <a href="postView/3"> <strong> En savoir plus</strong></a></p>
                        <hr class="d-none d-lg-block mb-0 mr-0" />
                                              
                </div>
            </div>
        </div>
    </div>


</section>
