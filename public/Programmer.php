<?php

namespace Programmer;

class Programmer extends \Employee\Employee
{
    public $langs = [];

    /**
     * @param mixed $langs
     */
    public function setLangs($langs)
    {
        $this->langs[] = $langs;
        return $this;
    }

    public function getLangs()
    {
        foreach ($this->langs as $lang){
            foreach ($lang as $key){
                echo $key . ' ';
            }
        }
    }

    public function addOneYear()
    {
        $this->age++;
    }

    public function checkAge(): void
    {
        if ($this->getAge() <= 30){
            parent::checkAge();
        } else {
            echo 'You are too old';
        }
    }
}