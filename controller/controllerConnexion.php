<?php


class controllerConnexion{

public function loginuser(){
        if(isset($_POST["connexion"])&& $_POST["connexion"] === "ok") {
                $email = $_POST["email"];
                $password = $_POST["password"];
                // var_dump($email);
                // var_dump($password);
                $user=new Users();
                $verif=$user->verifemail($email);
                // $verif=$user->verifstatut($userStatut);
                // var_dump($verif);
        
                if ($verif != null){
                       if ($password===$verif["password"]){
                                $_SESSION["login"]=$verif["idUser"];
                                $_SESSION["admin"]=$verif["userStatut"];
                               if($verif['userStatut']==='2'){
                                  header('Location: '.$this->rewritebase. 'adminView');     
                               } 
                       }
                       else{
                               $error='Votre mot de passe est incorrecte, veuillez recommencer.';
                       }
                }
                else {
                        $error='Votre adresse est invalide, veuillez recommencer.';
                }
                if (isset ($error)){   
                        return $error;
                }
                return true;
                
        }
        return false;
        
}
 public function inscription(){
                
        if(isset($_POST["register"])&& $_POST["register"] === "ok") {
                $pseudo = $_POST["pseudo"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $cpassword = $_POST["cpassword"];
                // var_dump($email);
                // var_dump($password);
                // var_dump($pseudo);
                // var_dump($cpassword);
                
                if($password === $cpassword){
                        $user=new Users();
                        if ($user->verifemail($email)==null){
                              return $user->inscription($email,$pseudo, $password);
                                
                            }else{
                                $error = "Email existe déjà";
                            }
                        

                }else{
                         $return = "Les deux mots de passe ne correspondent pas.";
                } 
                 
                
        }
        else{
                $error = "Vérifiez le pseudo";
        }
        if (isset ($error)){
                        
                return $error;
        }
 }

 public function contact(){
                
        
        if (isset($_POST["contact"]) && $_POST["contact"] === "ok") {
        
                $name = $_POST["name"]; 
                $email = $_POST["email"];
                $subject = $_POST["subject"];
                $message = $_POST["message"];

       
        }


 }
}
?>
