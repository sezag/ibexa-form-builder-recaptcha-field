<?php
declare(strict_types=1);

use Ibexa\CodeStyle\PhpCsFixer\InternalConfigFactory;

$configFactory = new InternalConfigFactory();
$configFactory->withRules([
    'declare_strict_types' => false,
]);

return $configFactory
    ->buildConfig()
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__ . '/src')
            ->files()->name('*.php')
    )
;
