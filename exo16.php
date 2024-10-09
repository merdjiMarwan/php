<?php
function plusPetit($tableau) {
    
    if (empty($tableau)) {
        return null; 
    } else {
        return min($tableau); 
    }
}

echo plusPetit([1, 2, 3]); 
?>