<?php declare(strict_types=1);

/*
 * This file is part of the :vendor/:project_name.
 *
 * Copyright (C) :year :vendor
 *
 * This software may be modified and distributed under the terms
 * of the MIT license. See the LICENSE file for details.
 */

$finder = \PhpCsFixer\Finder::create()
    ->name('*.php')
    ->in([__DIR__ . '/src', __DIR__ . '/tests'])
    ->ignoreDotFiles(false)
    ->ignoreVCSIgnored(true);

$config = new \PhpCsFixer\Config();
$config->setFinder($finder)
    ->setRules(
        [
            '@PSR12' => true,
            'array_syntax' => ['syntax' => 'short'],
            'ordered_imports' => ['sort_algorithm' => 'alpha'],
            'no_unused_imports' => true,
            'not_operator_with_successor_space' => true,
            'trailing_comma_in_multiline' => true,
            'phpdoc_scalar' => true,
            'unary_operator_spaces' => true,
            'binary_operator_spaces' => true,
            'blank_line_before_statement' => [
                'statements' => [
                    'break',
                    'continue',
                    'declare',
                    'return',
                    'throw',
                    'try',
                ],
            ],
            'phpdoc_single_line_var_spacing' => true,
            'phpdoc_var_without_name' => true,
            'class_attributes_separation' => [
                'elements' => [
                    'method' => 'one',
                ],
            ],
            'braces' => [
                'allow_single_line_closure' => true,
                'position_after_anonymous_constructs' => 'same',
                'position_after_functions_and_oop_constructs' => 'next',
                'position_after_control_structures' => 'same',
            ],
            'method_argument_space' => [
                'on_multiline' => 'ensure_fully_multiline',
                'keep_multiple_spaces_after_comma' => true,
            ],
            'single_trait_insert_per_statement' => true,
        ]
    );

return $config;
