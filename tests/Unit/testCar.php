<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;

class TestCar extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertCar()
    {

        $car= new car();
        $car->Make = 'Honda';
        $car->Model = 'Accord';
        $car->Year = 2012;

        $this->assertTrue($car->save());
    }

    public function testDelete()
    {

        $car= new car();
        $car->Make = 'Honda';
        $car->Model = 'Accord';
        $car->Year = 2012;

        $this->assertTrue($car->delete());
    }


}
