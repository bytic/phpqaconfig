<?php

namespace Bytic\Phpqa\PhpCsFixer;

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

function finder($paths = []): Finder
{
    return Finder::create()
        ->in($paths)
        ->ignoreDotFiles(true)
        ->ignoreVCS(true);
}

function config(Finder $finder, array $rules = []): Config
{
    $rules = array_merge(require __DIR__ . '/rules.php', $rules);

    $config = new Config();

    return $config
        ->setFinder($finder)
        ->setRules($rules)
        ->setRiskyAllowed(true)
        ->setUsingCache(true);
}
