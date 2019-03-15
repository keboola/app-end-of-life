<?php

declare(strict_types=1);

namespace Keboola\AppEndOfLife;

use Keboola\Component\Config\BaseConfig;

class Config extends BaseConfig
{
    public function getEolMessage(): string
    {
        $imageParams = $this->getImageParameters();
        if (!empty($imageParams['eolMessage'])) {
            return $imageParams['eolMessage'];
        } else {
            return 'This component has reached end of life and cannot be run any more.';
        }
    }
}
