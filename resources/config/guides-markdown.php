<?php

declare(strict_types=1);

use phpDocumentor\Guides\Markdown\MarkupLanguageParser;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $container): void {
    $container->services()
        ->defaults()
        ->autowire()
        ->autoconfigure()

        ->set(MarkupLanguageParser::class)
        ->tag('phpdoc.guides.parser.markupLanguageParser');
};
