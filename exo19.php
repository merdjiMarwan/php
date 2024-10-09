<?php
function capital($arg) {
    switch ($arg) {
        case 'France':
            return 'Paris';
        case 'Allemagne':
            return 'Berlin';
        case 'Italie':
            return 'Rome';
        case 'Algérie':
            return 'Alger';
        case 'Espagne':
            return 'Madrid';
        case 'Portugal':
            return 'Lisbonne';
        case 'Angleterre':
            return 'Londres';
        default:
            return 'Inconnu';
    }
}

echo capital('France');     
echo capital('Allemagne');  
echo capital('Algérie');   
echo capital('Canada');  
?>
