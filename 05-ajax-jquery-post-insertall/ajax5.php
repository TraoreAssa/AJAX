<?php
require_once('init.php');
$tab = array();


//------------------REQUETE ALLER------------------------
// $result = $bdd->exec("INSERT INTO employes (prenom,nom,sex, service, data_embauche,salaire) VALUES ('Assa','Traore','f','Développeur web','2019-01-01','3000')"); TEST!!!!!
    $result = $bdd->exec("INSERT INTO employes ( prenom, nom, sex, service, data_embauche, salaire) VALUES ('$_POST[prenom]','$_POST[nom]','$_POST[sex]','$_POST[service]','$_POST[data_embauche]','$_POST[salaire]')");

//------------------REQUETE RETOUR------------------------

    $resultat = $bdd->query("SELECT * FROM employes");

    $table['resultat'] = '<table class="table table-bordered"><tr>';
    
    for($i = 0; $i < $resultat-> columnCount(); $i++ )//compte le nombre de colonne dans ma BDD
    {
        $colonne = $resultat ->getColumnMeta($i); // Recolte les nom des colonnes de ma BDD
        // echo '<pre>'; print_r($colonne); echo '</pre>';
        $table['resultat'] .="<th>$colonne[name]</th>";
    }
    $table['resultat'] .= '</tr>';

    while($employe = $resultat->fetch(PDO::FETCH_ASSOC))
    {
        $table['resultat'] .= '<tr>';   
        foreach($employe as $value) //revu de la bdd
        {
            $table['resultat'] .= "<td>$value</td>";               
        }
        $table['resultat'] .= '</tr>';   
        
    }
    $table['resultat'] .= '</table>';

    echo json_encode($table);