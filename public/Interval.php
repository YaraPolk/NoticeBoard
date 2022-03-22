<?php

class Interval
{
    private $date1;
    private $date2;

    public function __construct(Date $date1, Date $date2)
    {
        $this->date1 = $date1->getData();
        $this->date2 = $date2->getData();
    }

    public function toDays(): string
    {
        return date_diff($this->date1, $this->date2)->format('%a дней');
    }

    public function toMonth(): string
    {
        return intdiv($this->toDays(), 30) . ' месяцев';
    }

    public function toYear(): string
    {
        return intdiv($this->toDays(), 365) . ' лет';
    }
}