<?php

namespace User;

class User
{
    private $name;
    protected $age;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

    public function checkAge(): void
    {
        if ($this->age >= 18){
            echo 'возраст приемлимый';
        } else {
            echo 'недорос';
        }
    }
}