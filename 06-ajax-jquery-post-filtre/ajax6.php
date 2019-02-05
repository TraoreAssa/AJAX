<?php
require_once('init.php');
$tab = array();

$resultat = $bdd->query("SELECT * FROM employes WHERE sex = '$_POST[sexe]'");


//---------------- Afficher toutes  les colonnes de la base de données
$table['resultat'] = '<table class="table table-bordered"><tr>';
    
for($i = 0; $i < $resultat-> columnCount(); $i++ ){
    $colone = $resultat ->getColumnMeta($i);
    $table['resultat'] .="<th>$colone[name]</th>";
}
$table['resultat'] .= '</tr>';

while($employe = $resultat->fetch(PDO::FETCH_ASSOC))
{
    $table['resultat'] .= '<tr>';   
    foreach($employe as $value)
    {
        $table['resultat'] .= "<td>$value</td>";               
    }
    $table['resultat'] .= '</tr>';   
    
}
$table['resultat'] .= '</table>';

echo json_encode($table);

?>