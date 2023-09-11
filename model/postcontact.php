<?php
     if(isset($_POST['nom']))
     {
         $err = 0;
         if(empty($_POST['nom']))
         {
            $err=1;
         }else{
            $nom = htmlspecialchars($_POST['nom']);
         }
         if(empty($_POST['email']))
         {
            $err=2;
         }else{
            $email = $_POST['email'];
            if(!preg_match("#^[a-z0-9\._-]+@[a-z0-9_-]{2,}\.[a-z]{2,}$#",$email))
            {
                $err=3;
            }
         }
         if(empty($_POST['message']))
         {
            $err=4;
         }else{
            $message = htmlspecialchars($_POST['message']);
         }


         if($err == 0)
         {
            // insertion dans la bdd
            $successContact = "Votre message a bien été envoyé";
         }else{
            $errContact = $err;
         }

     }

?>