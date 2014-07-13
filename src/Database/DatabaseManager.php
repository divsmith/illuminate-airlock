<?php namespace IlluminateDecouplr\Database; 

use Decouplr\Decouplr;
use Illuminate\Database\DatabaseManager as IlluminateDatabaseManager;

abstract class DatabaseManager extends Decouplr {

    public function __construct(IlluminateDatabaseManager $manager)
    {
        $this->decoupled = $manager;
    }

    public function connection()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function reconnect()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function disconnect()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getDefaultConnection()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function setDefaultConnection()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function extend()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getConnections()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function raw()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function selectOne()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function select()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function insert()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function update()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function delete()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function statement()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function affectingStatement()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }
} 