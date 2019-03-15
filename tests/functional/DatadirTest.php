<?php

declare(strict_types=1);

namespace Keboola\AppEndOfLife\FunctionalTests;

use Keboola\DatadirTests\DatadirTestCase;
use Keboola\DatadirTests\DatadirTestSpecification;

class DatadirTest extends DatadirTestCase
{
    public function provideDatadirSpecifications(): array
    {
        return [
            [
                new DatadirTestSpecification(
                    __DIR__ . '/empty-app/source/data',
                    1,
                    '',
                    'This component has reached end of life and cannot be run any more.' . "\n",
                    __DIR__ . '/empty-app/expected/data/out'
                ),
            ],
            [
                new DatadirTestSpecification(
                    __DIR__ . '/custom-message/source/data',
                    1,
                    '',
                    'All your base are belong to us.' . "\n",
                    __DIR__ . '/custom-message/expected/data/out'
                ),
            ],
        ];
    }
}
