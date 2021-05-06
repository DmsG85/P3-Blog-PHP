<!-- Header -->


<header class="post-view-head pb-5">
    
    <div class="container d-flex h-100 align-items-end">

        <div class="mx-auto text-center">
            
            <h1 class="mx-auto my-0 text-uppercase">
                <?php echo $actu["title"] ?>
            </h1>
        
            <div class="d-flex mt-4 align-items-center">
                
                <div class=" posts-informations" style="font-weight: bold">
                    <p class="mb-0">
                        Posté par <strong><?php echo $actu["user"]['username']; ?></strong>
                    </p>
                    <p class="mb-0">
                        Le <?php echo $actu["dateCreation"]; ?>
                    </p>
                    <p class="mb-0">
                        Dernière modification le <?= $actu["dateUpdate"];?>
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
               
                <h2 class="mb-4"><?php echo $actu["title"] ?> </h2>
                <hr class="d-none d-lg-block mb-0 ml-0" />

                <p><?php echo $actu["description"]; ?></p>

                
            </div>

            <!-- Comments section -->
            
            <div class="post-comments px-4 px-md-5 mb-5" id="comments-section">
            
                <h2>Commentaires</h2>
                <hr class="d-none d-lg-block ml-0">
                <?php foreach ($actu['comments'] as $comment): ?>
                <p>
                    Posté par <strong> <?php echo $comment["user"]["username"]; ?> :</strong>
                    <br>
                   <b> <?php echo $comment["comment"]; ?></b>
                    <br>
                    Le <em><?php echo $comment["commentDate"]; ?> </em>
                </p>
                <?php endforeach ?>
                <?php if (!isset($this->connectedUser)): ?>
                    <a href="/mvc/login" class="btn btn-primary mx-auto">
                        Se connecter pour commenter
                    </a>
                <?php else: ?>
                    <form method="post" action="<?php echo $this->rewritebase.'comment/'.$actu['idPost'];?>" id="createComment" novalidate>
                        <div class="input-group">
                            <span class="input-group-text">
                                Votre commentaire
                            </span>
                            <textarea name="comment" form='createComment' class="form-control" aria-label="With textarea"></textarea>
                            <button type="submit" class="btn btn-outline-secondary" value="submit" type="button" id="button-addon2">
                                Valider
                            </button>
                        </div>
                    </form>
                <?php endif ?>
            </div>         
            
        </div>


       


</section>