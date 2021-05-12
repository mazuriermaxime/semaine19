<?php
// Quelle semaine a lieu la validation du groupe 19002?
$tableau = array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""); 
$nb = count($tableau); 
echo"La validation du groupe 19002 auras lieu la ".$nb."éme semaines.";  

// Trouver la position de la dernière occurrence de Stage pour le groupe 19001.
$der_semaine_stage_1901 = array_search ( "Stage" , array_reverse ( $ a [ "19001" ], true )) + 1 ;

    // Extraire, dans un nouveau tableau, les codes des groupes.
$tableau_code_groupes = implode ( "," , array_keys ( $ a ));

    // Combien de semaines dure le stage du groupe 19003?
$duree_stage_1903 = array_count_values ( $ a [ "19003" ]) [ "Stage" ];
?>
