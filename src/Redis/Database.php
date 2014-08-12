<?php namespace Divsmith\IlluminateAirlock\Redis;

use Divsmith\Airlock\Airlock;
use Illuminate\Redis\Database as IlluminateDatabase;

abstract class Database extends Airlock {

    public function __construct(IlluminateDatabase $database)
    {
        $this->locker = $database;
    }

    public function connection()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function command()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }
} 