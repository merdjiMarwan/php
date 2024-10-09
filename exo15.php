<?php
function plusGrand($tableau) {
    
    if (empty($tableau)) {
        return null; 
    } else {
        return max($tableau); 
    }
}

echo plusGrand([1, 2, 3]); 
?>