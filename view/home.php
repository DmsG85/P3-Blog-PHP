
<!-- Masthead-->
<header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase">Gaëlle Dumas</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">"L'ambition ne vieillit pas"</h2>
                    <a class="btn btn-primary js-scroll-trigger" href="#about">En savoir plus</a>
                </div>
            </div>
           
        </header> 
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <!-- <h2 class="text-white mb-4">A Propos</h2> -->
                        <!-- <hr> -->
                    </div>
                </div>
            </div>
            
            <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                <div class="col-lg-2"><img class="img-thumbnail" src="public/img/GD_logo.png" alt="" /></div>
                <div class="col-lg-2">
                    <div class="bg-transparent text-center h-100 about">
                        <div class="d-flex h-100">
                            <div class="about-text w-100 my-auto text-center text-lg-center">
                                <h4 class="about-title">Gaëlle Dumas</h4>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam quidem quaerat unde, dicta sit fuga at, labore corrupti itaque excepturi velit. Ipsa magni consectetur aspernatur et minima quod quas. Neque?</p>
                                <br>
                                <a class="btn btn-outline-secondary" href="public/img/GD-CV-rose.pdf" target="_blank">Télécharger mon CV</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container">
                
                <!-- Project One Row-->
                <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                    <div class="col-lg-6"><img class="img-fluid" src="public/img/codecoeur.jpg" alt="" /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Une première formation...</h4>
                                    <p class="mb-0 text-white-50">
                                        En Janvier 2020, j'ai commencée une formation en tant qu'Intégratrice Web chez Social Builder et Webforce 3...
                                    </p>
                                    <hr class="d-none d-lg-block mb-0 ml-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-6"><img class="img-fluid" src="public/img/cafetime.jpg" alt="" /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white" style="text-align:left">Et une autre pour approfondir.</h4>
                                    <p class="mb-0 text-white-50"style="text-align:left">J'ai commencée ma formation chez Openclassrooms en novembre 2020...

                                    </p>
                                    <hr class="d-none d-lg-block mb-0 mr-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Formulaire de contact-->
        
        <section id="contact-form" class="contact-form-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">

                        <i class="far fa-paper-plane fa-2x mb-2 contact-title">
                        </i>
                        <h2 class="contact-title" >
                            N'hésitez pas à me contacter !
                        </h2>

                        <?php
                            if (isset ($error)){
                                        
                                echo '<p class= "text-danger">'.'<strong>'.$error.'<strong>'.'</p>';
                            }
                        ?>
                        <form method="POST"  class="form-inline d-flex flex-column">

                            <input type="text" name="name" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-4" id="contactName" placeholder="Votre nom" required/>
                
                            <input type="email" name="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-4" id="contactEmail" placeholder="Votre adresse email" required/>  

                            <input type="text" name="subject" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-4" id="contactSubject" placeholder="Objet" required/>

                            <textarea name="message" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-4" id="contactMessage" placeholder="Votre message" required></textarea>
                            
                            <button type="submit" class="btn btn-primary">
                                Envoyer
                            </button>
                        </form>
                    </div>
                </div>
            </div>
               
        </section>
        <!-- Contact-->
        <section class="contact-section bg-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Adresse</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50">Rosny-sous-bois</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50"><a href="#!">dmsgaelle@gmail.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Phone</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50">07.87.19.49.79</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
                </div>
            </div>
            
        </section>
       
        
        