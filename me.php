<?php

// Just for FUN
function whoAmI(){

    return json_encode([

        'name' => 'PANUEL HALDER',

        'roles' => ['Web Developer', 'SEO Expert'],

        'stack' => ['PHP', 'WordPress', 'HTML', 'CSS', 'JavaScript'],

        'starus' => 'Always optimizing'

    ], JSON_PRETTY_PRINT);   
}

echo whoAmI();
