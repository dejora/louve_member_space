<?php
/* *
 *  Cette page présente ses infos au membre de la Louve.
 * 
 *  La classe utilisée pour le membre est dans cl_LouveUser.php.
 *  L'objet est conservé dans la session.
 * */
require '_php/head.php';
require 'menu.php';
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="entete"><strong>Mes infos</strong></h3> 
            <div class="louve-box"> 
            <?php 
                    
            if( !isset($em_user) ){
                echo ('<p>Données temporairement indisponible (0x1) </p>');
            } else {
                echo ('<p> Bonjour '. $em_user->getFirstname() . ' ' . $em_user->getName() .'.<p>');
                echo ('<p> Votre numéro de téléphone est '. $em_user->phone .' . <p>');
                echo ('<p> Votre e-mail est '. $em_user->getEmail() .'. <p>');
                echo ('<p> Votre LouveID est '. $em_user->id .'. <p>');
                if ($em_user->isLeader())
                    echo ('<p> <strong>Vous êtes coordinateur.</strong> <p>');
                if ($em_user->status == 1)
                    echo ('<p> <br/><strong>Vous êtes à jour !</strong> <p>');
                else if ($em_user->status == 2)
                    echo ('<p> <br/><strong>Attention, vous avez des services en retard !</strong> <p>');
                else if ($em_user->status == 3)
                    echo ('<p> <br/><strong>Vous êtes désinscrit. Contactez le bureau des membres et ratrrapez vos créneaux manqués pour continuer à faire vos courses à la louve.</strong> <p>');
                echo ('<p> <br/><strong>Pour modifier ces informations contactez le bureau des membres. </strong><p>');
                echo ('<a href="changepwd.php">
                       <button class="btn btn-default type="submit">modifier mon mot de passe</button>
                       </a>');
            }
            ?>
            </div>
        </div>
    </div>
</div>
<?php require '_php/footer.php'; ?>
