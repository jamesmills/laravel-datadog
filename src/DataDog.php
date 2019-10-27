<?php

namespace JamesMills\LaravelDatadog;


use JamesMills\LaravelDatadog\Jobs\DataDogIncrement;

class DataDog
{

    public function increment($metric)
    {
        dispatch(new DataDogIncrement($metric));
    }
}