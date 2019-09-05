<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Client\FactFinderNg;

use Spryker\Client\Kernel\AbstractBundleConfig;
use SprykerEco\Shared\FactFinderNg\FactFinderNgConstants;

class FactFinderNgConfig extends AbstractBundleConfig
{
    /**
     * @return string
     */
    public function getFactFinderUsername(): string
    {
        return $this->get(FactFinderNgConstants::FACT_FINDER_USERNAME);
    }

    /**
     * @return string
     */
    public function getFactFinderPassword(): string
    {
        return $this->get(FactFinderNgConstants::FACT_FINDER_PASSWORD);
    }

    /**
     * @return string
     */
    public function getFactFinderChannel(): string
    {
        return $this->get(FactFinderNgConstants::FACT_FINDER_CHANNEL);
    }
}
