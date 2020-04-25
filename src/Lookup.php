<?php

namespace Yosmy\Phone\Carrier;

class Lookup
{
    /**
     * @var string|null
     */
    private $mcc;

    /**
     * @var string|null
     */
    private $mnc;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @param string|null $mcc
     * @param string|null $mnc
     * @param string|null $name
     */
    public function __construct(
        ?string $mcc,
        ?string $mnc,
        ?string $name
    ) {
        $this->mcc = $mcc;
        $this->mnc = $mnc;
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getMcc(): ?string
    {
        return $this->mcc;
    }

    /**
     * @return string|null
     */
    public function getMnc(): ?string
    {
        return $this->mnc;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
}
