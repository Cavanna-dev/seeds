<?php

$finder = PhpCsFixer\Finder::create()
    ->files()
    ->name('*.php')
    ->in(__DIR__.'/src')
    ->in(__DIR__.'/tests')
;

return PhpCsFixer\Config::create()
    ->setUsingCache(true)
    ->setRules([
        '@Symfony' => true,
        'phpdoc_order' => true,
        'array_syntax' => ['syntax' => 'short'],
        'no_useless_else' => true,
        'ordered_class_elements' => true,
        'yoda_style' => true,
    ])
    ->setFinder($finder)
;
