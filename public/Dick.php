<?php

class Dick implements Figure
{
    private $r;
    const PI = 3.14;

    public function __construct($r)
    {
        $this->r = $r;
    }

    public function getSquare()
    {
        return $this->r * $this->r * self::PI;
    }

    public function getPerimeter()
    {
        return 2 * $this->r * self::PI;
    }
}