<?php
function listHTML($titre, $arg) {
    if (empty($titre) && empty($arg)) {
        return null;
    }

    $html = "<h3>$titre</h3><ul>";
    foreach ($arg as $arg) {
        $html .= "<li>$arg</li>";
    }
    $html .= "</ul>";

    return $html;
}


echo listHTML("Capitale", ["Paris", "Berlin", "Moscou"]);
?>
