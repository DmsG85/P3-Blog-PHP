<?php

class ConnexionController{

    public function loginuser()
    {
        if (isset($_POST["connexion"]) && $_POST["connexion"] === "ok") {
            $email = $_POST["email"];
            $password = $_POST["password"];
            
            $user = new Users();
            $verif = $user->verifemail($email);
            

            if ($verif != null){
                if ($password === $verif["password"]){
                    unset($verif["password"]);
                    $_SESSION["user"] = $verif;
                    $_SESSION["isAdmin"] = $verif["userStatut"] == 2;
                    if ($verif['userStatut'] === '2'){
                        header('Location: '.$this->rewritebase. 'admin/postList');
                        exit;  
                    }
                } else {
                    $error = 'Votre mot de passe ou votre adresse est incorrecte, veuillez recommencer.';
                }
            } else {
                $error = 'Votre mot de passe ou votre adresse est incorrecte, veuillez recommencer.';
            }
            if (isset($error)){   
                return $error;
            }
            return true;
        }
        return false;
    }

    public function logoutuser()
    {
        unset($_SESSION["user"]);
        unset($_SESSION["isAdmin"]);
    }

    public function inscription()
    {               
        if (isset($_POST["register"]) && $_POST["register"] === "ok") {
            $pseudo = $_POST["pseudo"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $cpassword = $_POST["cpassword"];
            
            if ($password === $cpassword){
                $user = new Users();
                if ($user->verifemail($email) == null) {
                    return $user->inscription($email, $pseudo, $password);
                } else {
                    $error = "Email existe déjà";
                }
            } else {
                $return = "Les deux mots de passe ne correspondent pas.";
            } 
        } else {
            $error = "Vérifiez le pseudo";
        }
        if (isset($error)){
            return $error;
        }
    }

    public function contact()
    {
        if (isset($_POST["contact"]) && $_POST["contact"] === "ok") {
                $name = $_POST["name"]; 
                $email = $_POST["email"];
                $subject = $_POST["subject"];
                $message = $_POST["message"];
        }
    }
}
?>
