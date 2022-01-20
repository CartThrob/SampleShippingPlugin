<?php

ini_set('memory_limit', '2048M');

$finder = PhpCsFixer\Finder::create()
    ->exclude('automation')
    ->exclude('build')
    ->exclude('vendor')
    ->name('*.php')
    ->in(__DIR__)
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR1' => true,
        '@PSR2' => true,
        '@PSR12' => true,
        '@Symfony' => true,
        'array_syntax' => ['syntax' => 'short'],
        'cast_spaces' => ['space' => 'none'],
        'concat_space' => ['spacing' => 'one'],
        'general_phpdoc_annotation_remove' => [
            'annotations' => ['author', 'category', 'see', 'since', 'version'],
        ],
        'increment_style' => false,
        'linebreak_after_opening_tag' => true,
        'no_superfluous_phpdoc_tags' => false,
        'ordered_imports' => true,
        'phpdoc_align' => ['align' => 'left'],
        'phpdoc_separation' => false,
        'phpdoc_summary' => false,
        'yoda_style' => false,
    ])
    ->setFinder($finder);
