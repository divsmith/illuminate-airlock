<?php namespace IlluminateDecouplr\Redis; 

use Decouplr\Decouplr;
use Illuminate\Redis\Database as IlluminateDatabase;

abstract class Database extends Decouplr {

    public function __construct(IlluminateDatabase $database)
    {
        $this->decoupled = $database;
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