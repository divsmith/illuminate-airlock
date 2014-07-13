<?php namespace IlluminateDecouplr\Mail; 

use Decouplr\Decouplr;
use Illuminate\Mail\Mailer as IlluminateMailer;

abstract class Mailer extends Decouplr {

    public function __construct(IlluminateMailer $mailer)
    {
        $this->decoupled = $mailer;
    }

    public function alwaysFrom()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function plain()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function send()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function queue()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function queueOn()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function later()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function laterOn()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function handleQueuedMessage()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function pretend()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function isPretending()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getViewFactory()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getSwiftMailer()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function failures()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function setSwiftMailer()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function setLogger()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function setQueue()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function setContainer()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }
} 