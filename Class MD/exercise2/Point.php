<?php


class Point
{
    protected float $x;
    protected float $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX(): float
    {
        return $this->x;
    }

    public function getY(): float
    {
        return $this->y;
    }

    public function setX(float $x): void
    {
        $this->x = $x;
    }

    public function setY(float $y): void
    {
        $this->y = $y;
    }

    public static function swap_points(Point $p1, Point $p2): void
    {
        //Swap X Values
        $tempX = $p1->getX();
        $p1->setX($p2->getX());
        $p2->setX($tempX);

        //Swap Y Values
        $tempY = $p1->getY();
        $p1->setY($p2->getY());
        $p2->setY($tempY);
    }
}