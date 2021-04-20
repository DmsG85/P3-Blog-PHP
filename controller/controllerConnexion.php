<?php


class controllerConnexion{

public function loginuser(){
        if(isset($_POST["connexion"])&& $_POST["connexion"] === "ok") {
                $email=$_POST["email"];
                $password=$_POST["password"];
                // var_dump($email);
                // var_dump($password);
                $user=new Users;
                $verif=$user->verifemail($email);
                // var_dump($verif);
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
public function registeruser(){

        if(isset($_POST["register"])) {
                $pseudo=$_POST["pseudo"];
                $email=$_POST["email"];
                $password=$_POST["password"];
                $cpassword=$_POST["cpassword"];
                var_dump($email);
                var_dump($password);
                var_dump($pseudo);
                var_dump($cpassword);
                $user=new Users;
                // $verif=$user->verifemail($email);
                // var_dump($verif);
                if($password == $cpassword){

                }else $return = "Les deux mots de passe ne correspondent pas.";
                if ($verif != null){
                       if ($password===$verif["password"]){
                                $_SESSION["register"]=$verif["idUser"];
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
