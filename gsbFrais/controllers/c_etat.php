<?php
/** @var PdoGsb $pdo */
include 'views/v_sommaire.php';
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
switch($action){
    case 'afficher':
        {
            include("views/v_calculFrais.php");
            break;
        }
        case 'valider':{
         
            $num=$_REQUEST['num'];
            $type=$_REQUEST['type'];
            $numero = $pdo->getResultat ($idVisiteur, $type);
     include("views/v_result_calcul.php");
            break;
        }

    case 'voirEtat':{
        $lAnnee = $_REQUEST['lstAnnee'];
        
    }
}