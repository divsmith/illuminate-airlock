<?php namespace IlluminateDecouplr\Console;

use Decouplr\Decouplr;
use IlluminateDecouplr\Console\Application as IlluminateApplication;

abstract class Application extends Decouplr {

    public function __construct(IlluminateApplication $application)
    {
        $this->decoupled = $application;
    }

    public function start()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function make()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function boot()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function call()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function add()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function resolve()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function resolveCommands()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function renderException()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function setExceptionHandler()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function setLaravel()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function setAutoExit()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }
} 