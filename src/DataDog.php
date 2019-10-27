<?php

namespace JamesMills\LaravelDataDog;


use JamesMills\LaravelDataDog\Jobs\DataDogIncrement;

class DataDog
{

    public function increment($metric)
    {
        dispatch(new DataDogIncrement($metric));
    }
}