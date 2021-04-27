<?php

namespace App;

use App\Hero;

class Arena
{
    private Hero $hero;
    private int $size = 10;
    private array $monsters;


    public function __construct(
        object $hero,
        array $monsters,
        int $size = 10
    ) {
        $this->hero = $hero;
        $this->monsters = $monsters;
        $this->size = $size;
    }

    public function getDistance(object $fighter1, object $fighter2)
    {
        return sqrt(($fighter1->getX() - $fighter2->getX()) ** 2 + ($fighter1->getY() - $fighter2->getY()) ** 2);
    }

    public function touchable(object $fighter1, object $fighter2)
    {
        if ($fighter1->getRange() >= $this->getDistance($fighter1, $fighter2)) {

            return true;
        }
    }

    /**
     * Get the value of hero
     */
    public function getHero()
    {
        return $this->hero;
    }

    /**
     * Set the value of hero
     *
     * @return  self
     */
    public function setHero($hero)
    {
        $this->hero = $hero;

        return $this;
    }

    /**
     * Get the value of monsters
     */
    public function getMonsters()
    {
        return $this->monsters;
    }

    /**
     * Set the value of monsters
     *
     * @return  self
     */
    public function setMonsters($monsters)
    {
        $this->monsters = $monsters;

        return $this;
    }

    /**
     * Get the value of size
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set the value of size
     *
     * @return  self
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }
}
