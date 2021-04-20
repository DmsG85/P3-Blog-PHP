     <!-- Content -->

        
     <div class="masthead connexionSection">
    <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
            <h1 class="mx-auto mb-3 text-uppercase">Bienvenue !</h1>
            <h2 class="text-white-50 mx-auto mt-2 mb-3"><a href="login">Se connecter</a> | S'inscrire</h2>

                        
            <form class="form-inline d-flex flex-column" method="POST" action="register">

                <input type="text" name="pseudo" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" placeholder="Votre pseudo...*" required>

                
                <input type="password" name="password" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" placeholder="Votre mot de passe...*" required>

                
                <input type="password" name="cpassword" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="cpassword" placeholder="Retapez votre mot de passe...*" required>
                <input type="email" name="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" placeholder="Votre adresse email...*" required>

                
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="confidentiality" id="confidentiality" required/>
                    <label class="form-check-label text-white-50" for="confidentiality" >* J'ai lu et j'accepte la <a href="#"> Politique de confidentialité des données personnelles</a></label>
                </div>
                
                <button type="submit" class="btn btn-primary" name="register" value='ok'>S'inscrire</button>
                <p class="text-white-50">Vous avez déjà un compte ? <a href="login">Connectez-vous !</a></p>

            </form>
            
        </div>
    </div>
</div>