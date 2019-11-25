<?php

namespace JamesMills\LaravelDataDog;


use JamesMills\LaravelDataDog\Jobs\DataDogIncrement;

class DataDog
{

    public function increment($metric, Array $tags = [], $host = null)
    {
        dispatch(new DataDogIncrement($metric, $tags, $host));
    }
}
