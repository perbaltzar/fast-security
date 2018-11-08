<?php

/**
 * Returns the filepath to the chosen language
 * @param  string $locale name of the 
 * @return string         filepath
 */
function trans(string $locale): string{
    $languages = [
        'sv' => __DIR__.'/lang/sv.php',
        'en' => __DIR__.'/lang/en.php',
    ];
    return $languages[$locale];
}
