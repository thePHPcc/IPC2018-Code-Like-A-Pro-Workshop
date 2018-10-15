<?php declare(strict_types = 1);
namespace BusFlix;

class Seat {

    /** @var bool */
    private $occupied = false;

    public function isAvailable(): bool {
        return !$this->occupied;
    }

    /**
     * @throws FailedException
     */
    public function occupy(): void {
        if ($this->occupied) {
            throw new FailedException();
        }
        $this->occupied = true;
    }



}
