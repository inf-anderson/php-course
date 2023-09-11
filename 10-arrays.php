<?php

$languages = ['PHP', 'JavaScript', 'Python', 'Ruby', 'Java', 'C#'];

#var_dump(isset($languages[6]));
#echo '<pre>';
#print_r($languages);
#echo '</pre>';
#
#echo count($languages);


#$languages = [
#    'php' => '8.2.9',
#    'javascript' => 'ES6',
#];
#echo '<pre>';
#echo print_r($languages, true);
#echo '</pre>';

// multi dimensional array

$languages = [
    'php' => [
        'version' => '8.2.9',
        'type' => 'backend',
        'paradigms' => [
            'object-oriented',
            'imperative',
            'functional',
        ] 
    ],
    'javascript' => [
        'version' => 'ES6',
        'type' => 'frontend',
        'paradigms' => [
            'object-oriented',
            'imperative',
            'functional',
        ]
    ],
];

echo '<pre>';
echo print_r($languages, true);
echo '</pre>';
?>