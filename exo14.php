<?php
function dernierElementTableau($tableau) {
    
    if (empty($tableau)) {
        return null; 
    } else {
        return end($tableau); 
    }
}

echo dernierElementTableau([1, 2, 3]); 
?>