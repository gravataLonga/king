<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/domain')
    ->in(__DIR__ . '/config')
    ->in(__DIR__ . '/resource/databases')
;

$config = new PhpCsFixer\Config();
return $config->setRules([
    '@PSR12' => true,
    'strict_param' => true,
    'array_syntax' => ['syntax' => 'short'],
    'declare_strict_types' => true
])
    ->setFinder($finder)
    ->setRiskyAllowed(true)
    ;
