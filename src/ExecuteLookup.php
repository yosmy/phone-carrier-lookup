<?php

namespace Yosmy\Phone\Carrier;

interface ExecuteLookup
{
    /**
     * @param string $country
     * @param string $prefix
     * @param string $number
     *
     * @return Lookup
     *
     * @throws UnresolvableLookupException
     */
    public function execute(
        string $country,
        string $prefix,
        string $number
    ): Lookup;
}