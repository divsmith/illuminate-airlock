<?php namespace Divsmith\IlluminateDecouplr\Cache;

use Divsmith\Decouplr\Decouplr;
use Illuminate\Cache\Repository as IlluminateRepository;

abstract class Repository extends Decouplr {

    public function __construct(IlluminateRepository $repo)
    {
        $this->decoupled = $repo;
    }

    public function has()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function get()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function pull()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function put()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function add()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function remember()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function sear()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function rememberForever()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getDefaultCacheTime()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function setDefaultCacheTime()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getStore()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function offsetExists()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function offsetGet()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function offsetSet()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function offsetUnset()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }
} 