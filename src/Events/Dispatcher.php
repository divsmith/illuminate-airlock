<?php namespace Divsmith\IlluminateAirlock\Events;

use Divsmith\Airlock\Airlock;
use Illuminate\Events\Dispatcher as IlluminateDispatcher;

abstract class Dispatcher extends Airlock {

    public function __construct(IlluminateDispatcher $dispatcher)
    {
        $this->locker = $dispatcher;
    }

    public function listen()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function hasListeners()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function queue()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function subscribe()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function until()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function flush()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function firing()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function fire()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getListeners()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function makeListener()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function createClassListener()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function forget()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }
} 