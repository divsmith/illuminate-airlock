<?php namespace Divsmith\IlluminateAirlock\Log;

use Divsmith\Airlock\Airlock;
use Illuminate\Log\Writer as IlluminateWriter;

abstract class Writer extends Airlock {

    public function __construct(IlluminateWriter $writer)
    {
        $this->locker = $writer;
    }

    public function useFiles()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function useDailyFiles()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function useErrorLog()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function listen()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getMonolog()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getEventDispatcher()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function setEventDispatcher()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function write()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function debug()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function notice()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function warning()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function error()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function critical()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function alert()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }
} 