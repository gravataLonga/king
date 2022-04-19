<?php

declare(strict_types=1);

// Configure Options for Twig
// @see https://twig.symfony.com/doc/3.x/api.html#environment-options
return [

    // When set to true, the generated templates have a __toString()
    // method that you can use to display the generated nodes (default to false).
    'debug' => false,

    // The charset used by the templates.
    'charset' => 'utf-8',

    // An absolute path where to store the compiled templates,
    // or false to disable caching (which is the default).
    // @note: This is overwritten on TwigServiceProvider
    'cache' => false,

    // When developing with Twig, it's useful to recompile the template whenever
    // the source code changes. If you don't provide a value for the auto_reload option,
    // it will be determined automatically based on the debug value.
    'auto_reload' => null,

    // If set to false, Twig will silently ignore invalid variables
    // (variables and or attributes/methods that do not exist) and replace them with a null value.
    // When set to true, Twig throws an exception instead (default to false).
    'strict_variables' => false,

    // A flag that indicates which optimizations to apply
    // (default to -1 -- all optimizations are enabled; set it to 0 to disable).
    'autoescape' => '-1'
];
