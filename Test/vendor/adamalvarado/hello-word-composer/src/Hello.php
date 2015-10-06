<?php

namespace Com\Iesebre\Dam2\adamalvarado\hellowordcomposer;

use Faker\Factory;

class Hello
{
    public $faker;

    public function __construct()
    {
        $this->faker = Factory::create();
    }

    public function say_hello()
    {
        echo "Hola " . $this->faker->name . "!\n";
    }
}