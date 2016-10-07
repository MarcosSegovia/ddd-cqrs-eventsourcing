<?php

namespace Store\Domain\Model;

use Core\Domain\Model\DomainEvent;

class DrinkWasCreated implements DomainEvent
{
    /** @var string */
    private $id;

    /** @var string */
    private $name;

    public function __construct(
        DrinkId $a_id,
        string $a_name
    )
    {
        $this->id   = (string) $a_id;
        $this->name = $a_name;
    }

    /**
     * @return DrinkId
     */
    public function aggregateId() : DrinkId
    {
        return DrinkId::fromString($this->id);

    }

    /**
     * @return string
     */
    public function name() : string
    {
        return $this->name;
    }
}
