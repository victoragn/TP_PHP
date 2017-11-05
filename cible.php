<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Vérification du MDP</title>
    </head>
    
    <body>
        <?php 
            include("infos_sensibles.php");/*recupere le mot de passe dans un fichier separé*/
            if($mdpNASA==$_POST['mdp']){/*verifie si le mot de passe est le bon*/
                echo "C'est gagné !";
            }else{
                echo "Mauvais mot de passe";
            }
        ?>
    </body>
</html>