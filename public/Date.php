<?php

class Date
{
    public $data;

    public function __construct($data = null)
    {
        if ($data !== null) {
            $this->data = date_create($data);
        } else {
            $this->data = date('Y.m.d');
        }
    }

    public function getDate($str): string
    {
        return date_format($this->data, $str);
    }

    public function getDay(): string
    {
        $str = 'd';
        return $this->getDate($str);
    }

    public function getMonth($lang = null): string
    {

        if ($lang === 'en') {
            return date_format($this->data, 'F');
        }

        if ($lang === 'ru') {
            $months = [
                'January' => 'Январь',
                'February' => 'Февраль',
                'March' => 'Март',
                'April' => 'Апрель',
                'May' => 'Май',
                'June' => 'Июнь',
                'July' => 'Июль',
            ];
            return strtr(date_format($this->data, 'F'), $months);
        }

        return date_format($this->data, 'm');
    }

    public function getYear()
    {
        $str = 'Y';
        return $this->getDate($str);
    }

    public function getWeekDay(): string
    {
        $str = 'l';
        return $this->getDate($str);
    }

    private function addDate($str)
    {
        date_modify($this->data, $str);
        return date_format($this->data, 'Y-m-d');
    }

    public function addDay($value): void
    {
        $str = $value . ' day';
        $this->addDate($str);
    }

    public function sunDay($value): void
    {
        $str = '-' . $value . ' day';
        $this->addDate($str);
    }

    public function addMonth($value): void
    {
        $str = $value . ' month';
        $this->addDate($str);
    }

    public function addYear($value)
    {
        $str = $value . ' year';
        $this->addDate($str);
        return $this->data;
    }

    public function format($format)
    {
        return date_format($this->data, $format);
    }

    public function __toString():string
    {
        return date_format($this->data, 'Y.m.d');
    }
}