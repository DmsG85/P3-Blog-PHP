<?php


class controllerConnexion{

public function loginuser(){
        if(isset($_POST["connexion"])&& $_POST["connexion"] === "ok") {
                $email=$_POST["email"];
                $password=$_POST["password"];
                var_dump($email);
                var_dump($password);
                $user=new Users;
                $verif=$user->verifemail($email);
                var_dump($verif);
                if ($verif != null){
                       if ($password===$verif["password"]){
                                $_SESSION["login"]=$verif["idUser"];
                       }
                       else{
                               $error='mot de passe incorrecte';
                       }
                }
                else {
                        $error='adresse invalide';
                }
                if (isset ($error)){
                        
                        return $error;
                }
                
        }
        
}

}
?>
