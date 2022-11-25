<?php
declare(strict_types=1);

/**
 * @inspiration https://github.com/sonata-project/SonataPageBundle/blob/3.x/.php-cs-fixer.dist.php
 * @inspiration https://gitlab.com/rluna-php/prestashop/PrestaShop/-/blob/develop/.php-cs-fixer.dist.php
 * @inspiration https://github.com/wearedestination/php-cs-fixer-config/blob/master/src/Config.php
 * @inspiration https://github.com/symfony/flex/blob/1.x/.php-cs-fixer.dist.php
 * @inspiration https://github.com/magento/magento2/blob/2.4-develop/.php-cs-fixer.dist.php
 */
return [
    '@Symfony' => true,
    '@Symfony:risky' => true,

    '@PHP80Migration' => true,
    '@PHP81Migration' => true,

    'array_syntax' => ['syntax' => 'short'],
    'concat_space' => ['spacing' => 'one'],
    'echo_tag_syntax' => ['format' => 'short'],

    'ordered_imports' => ['sort_algorithm' => 'alpha', 'imports_order' => ['class', 'function', 'const']],
    'declare_strict_types' => true,
    'php_unit_method_casing' => ['case' => 'camel_case'],

    'phpdoc_to_comment' => ['ignored_tags' => ['psalm-suppress', 'phpstan-var']],
    'protected_to_private' => false,
];
