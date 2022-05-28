<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>SignUp</title>
        <link rel="stylesheet" href="">
    </head>

    <body>
        
        <section id="nv">
            <h2>Ajoutez un nouveau compte employé :</h2>
            
            <form method="post" action="Tadmin.php">
                
                <input type = "text" name="nom" placeholder="Nom..."  maxlength="50" required="required"> 
                <input type = "text" name="prenom" placeholder="Prénom..."  maxlength="50" required = "required"> 
                <input type = "text" name="mail" placeholder="Mail..."  maxlength="50" required = "required"> 
                <input type = "text" name="nid" placeholder="Numéro d'identification..."  maxlength="50" required = "required"> 
                <input type = "text" name="specialite" placeholder="Spécialité..."  maxlength="50" required = "required"> 
                <input type = "text" name="dispo" placeholder="Disponibilités..."  maxlength="50" required = "required"> 
                
                             <!--                            -->
                            <!--       GENERATEUR XML         -->
                             <!--                            -->
                <input type="file" name="image[]" />
                <button type="submit" name="submit">Créer le compte</button>
                
            </form>
        </section>

    </body>

</html>
