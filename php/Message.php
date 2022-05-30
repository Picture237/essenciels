<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envoi d'un message par Formulaire</title>
</head>
<body>
    <?php
        $retour = mail('jules@free.frr','Envoi depuis le Site ESSEN-CIELS',$_POST['con_message'],'From :',$_POST['con_emaail']);
        if($retour)
            {
                echo 'Votre message à ete envoyé';
            }

    ?>
</body>
</html>