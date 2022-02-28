<?php
namespace App\Models;

class Bird extends Animal
{
    public $table = "birds";

    protected $fillable =
        [
            'flying',
        ];

    public function speak()
    {
        print('AAA!');
    }

    public function fly()
    {
        $this->flying = true;
    }

    public function land()
    {
        $this->flying = false;
    }

    public function isFlying()
    {
        return $this->flying;
    }
}
