<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\TypeDeclaration\Rector\ClassMethod\AddVoidReturnTypeWhereNoReturnRector;

return RectorConfig::configure()

    ->withPaths([
        __DIR__ . '/web/modules/custom',
    ])
  ->withAttributesSets(symfony: true, doctrine: true)
    // uncomment to reach your current PHP version
    // ->withPhpSets()
      ->withConfiguredRule(
      \DrupalRector\Drupal10\Rector\Deprecation\AnnotationToAttributeRector::class, [
        new \DrupalRector\Drupal10\Rector\ValueObject\AnnotationToAttributeConfiguration('10.0.0', '10.0.0', 'Source', 'Drupal\ui_patterns\Attribute\Source'),
        new \DrupalRector\Drupal10\Rector\ValueObject\AnnotationToAttributeConfiguration('10.0.0', '10.0.0', 'PropType', 'Drupal\ui_patterns\Attribute\PropType'),
        new \DrupalRector\Drupal10\Rector\ValueObject\AnnotationToAttributeConfiguration('10.0.0', '10.0.0', 'PropTypeAdapter', 'Drupal\ui_patterns\Attribute\PropTypeAdapter'),
      ]
    )
    ->withRules([
        AddVoidReturnTypeWhereNoReturnRector::class,
    ])

  ;
