<?php

namespace Makarovna\Task06_2;

//use Makarovna\Task06_2\RoomInterface;

abstract class Decorator implements RoomInterface
{
    private $room;

    public function __construct(RoomInterface $room)
    {
        $this->room = $room;
    }

    public function getPrice(): int
    {
        return $this->room->getPrice();
    }

    public function getDescription(): string
    {
        return $this->room->getDescription();
    }
}
