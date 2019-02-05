<?php
    require_once("init.php");
    $table = array();

    //----------Requete Aller
    $resultat = $bdd->query("SELECT * FROM employes WHERE id_employes = '$_POST[id]'");
    // $resultat = $bdd->query("SELECT * FROM employes WHERE id_employes = 739");

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