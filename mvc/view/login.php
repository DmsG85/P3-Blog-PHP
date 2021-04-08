
       <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Voulez-vous vraiment quitter cette page ?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Cliquez sur "Se déconnecter" si vous souhaitez vous déconnecter du tableau de bord</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                        <a class="btn btn-primary-custom" href="index.php?action=deconnexion">Se déconnecter</a>
                    </div>
                </div>
            </div>
        </div>

        
        
<div class="masthead connexionSection">
    <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
            <h1 class="mx-auto mb-5 text-uppercase">Bienvenue !</h1>
            <h2 class="text-white-50 mx-auto mt-2 mb-3">Se connecter | <a href="register">S'inscrire</a></h2>

            
            <form method="POST" action="/login" class="form-inline d-flex flex-column">

                                    <input type="email" name="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" placeholder="Votre email..." required>
                                    <input type="password" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" name="pass" placeholder="Votre mot de passe..." required>
                <a href="index.php?action=forgotPassView">J'ai oublié mon mot de passe...</a>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="rememberme" id="rememberme" />
                    <label class="form-check-label text-white-50" for="rememberme" >Se souvenir de moi</label>
                </div>
                <button type="submit" class="btn btn-primary mx-auto">Se connecter</button>
                <p class="text-white-50">Pas encore membre ? <a href="register">Je m'inscris !</a></p>


            </form>
<?php 
    if(isset($_SESSION["SUCCESS"])){
        echo '<div class="text-success p-2 text-center text-uppercase font-weight-bold" style="font-size:1em; font-family: Arial, Helvetica, sans-serif;">'.$_SESSION["SUCCESS"].'</div>';
        unset($_SESSION['SUCCESS']);
        }

    if(isset($_SESSION["ERROR"])){
        echo '<div class="text-danger p-2 text-center text-uppercase font-weight-bold" style="font-size:1em; font-family: Arial, Helvetica, sans-serif;">'.$_SESSION["ERROR"].'</div>';
        unset($_SESSION['ERROR']);
        }
?>
        </div>
    </div>
</div> 





