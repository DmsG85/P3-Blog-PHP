 
  <body id="page-top">
     <!-- Navigation-->
     <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="/mvc/"><i class="fas fa-home"></i></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="<?php echo $this->rewritebase;?>#about">
                            A propos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="<?php echo $this->rewritebase;?>listPosts">
                            Blog
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="<?php echo $this->rewritebase;?>#contact-form">
                            Contactez-moi
                            </a>
                        </li>
                        <?php if ($this->connectedUser): ?>
                            <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="<?php echo $this->rewritebase;?>logout">
                            Deconnexion
                            </a>
                        </li>
                        <?php else: ?>  
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="<?php echo $this->rewritebase;?>login">
                            Connexion
                            </a>
                        </li>
                        <?php endif ?>
                        <?php if ($this->userIsAdmin): ?>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="<?php echo $this->rewritebase;?>admin/postList" target="_blank">
                            Dashboard
                            </a>
                        </li>
                        <?php endif ?>
                    </ul>
                </div>
            </div>
        </nav>
</body>