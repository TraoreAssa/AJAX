<?php
require_once('init.php');
$tab = array();

$resultat = $bdd->query("SELECT * FROM employes WHERE sex = '$_POST[sex]' AND (salaire BETWEEN '$_POST[salaire]' AND '$_POST[salaire1]') AND service = '$_POST[service]' AND (data_embauche BETWEEN '$_POST[data_embauche]' AND '$_POST[data_embauche1]')");
// $resultat = $bdd->query("SELECT * FROM employes WHERE sex = 'm' AND (salaire BETWEEN 1000 AND 3000) AND service = 'Sport' AND (data_embauche BETWEEN '2008-01-01' AND '2008-12-31')");

$ligne = $resultat ->rowCount();

//---------------- Afficher toutes  les colonnes de la base de données

if($ligne == 0){
    $tab['resultat'] = '<div class="col-md-7 offset-md-3 alert alert-danger"> Aucune corespondance !!</div>';   
}
else{

    $tab['resultat'] = '<table class="table table-bordered"><tr>';
        
    for($i = 0; $i < $resultat-> columnCount(); $i++ ){
        $colonne = $resultat ->getColumnMeta($i);
        $tab['resultat'] .="<th>$colonne[name]</th>";
    }
    $tab['resultat'] .= '</tr>';

    while($employe = $resultat->fetch(PDO::FETCH_ASSOC))
    {
        $tab['resultat'] .= '<tr>';   
        foreach($employe as $value)
        {
            $tab['resultat'] .= "<td>$value</td>";               
        }
        $tab['resultat'] .= '</tr>';   
        
    }
    $tab['resultat'] .= '</table>';
}

    

echo json_encode($tab);

?>