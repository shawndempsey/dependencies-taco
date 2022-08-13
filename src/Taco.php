<?php
namespace Taco;

use Lettuce\Lettuce;

class Taco
{
    private $lettuce;

    public function __construct()
    {
        echo "Taco v1.0.0\n";
        $this->lettuce = new Lettuce();
    }
}
