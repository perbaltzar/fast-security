<?php

function trans(string $locale): string{
    $languages = [
        'sv' => __DIR__.'/lang/sv.php',
        'en' => __DIR__.'/lang/en.php',
    ];
    return $languages[$locale];
}
