<?php namespace LaravelDecouplr\Events;

use Decouplr\Decouplr;
use Illuminate\Events\Dispatcher;

abstract class DispatcherDecouplr extends Decouplr{

    public function __construct(Dispatcher $dispatcher)
    {
        $this->decoupled = $dispatcher;
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