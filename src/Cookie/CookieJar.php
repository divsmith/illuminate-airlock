<?php namespace IlluminateDecouplr\Cookie; 

use Decouplr\Decouplr;
use IlluminateDecouplr\Cookie\CookieJar as IlluminateCookieJar;

abstract class CookieJar extends Decouplr {

    public function __construct(IlluminateCookieJar $cookieJar)
    {
        $this->decoupled = $cookieJar;
    }

    public function make()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function forever()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function forget()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function hasQueued()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function queued()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function queue()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function unqueue()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function setDefaultPathAndDomain()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getQueuedCookies()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }
} 