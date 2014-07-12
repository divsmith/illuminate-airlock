<?php namespace LaravelDecouplr; 

use Decouplr\Decouplr;
use Illuminate\Log\Writer;

class LaravelLogDecouplr extends Decouplr {

    public function __construct(Writer $writer){
        $this->decoupled = $writer;
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
} 