<?php
function premierElementTableau($tableau) {
    
    if (empty($tableau)) {
        return null; 
    } else {
        return $tableau[0]; 
    }
}

echo premierElementTableau([1, 2, 3]); 
?>
