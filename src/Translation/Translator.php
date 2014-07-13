<?php namespace IlluminateDecouplr\Translation; 

use Decouplr\Decouplr;
use IlluminateDecouplr\Translation\Translator as IlluminateTranslator;

abstract class Translator extends Decouplr {

    public function __construct(IlluminateTranslator $translator)
    {
        $this->decoupled = $translator;
    }

    public function parseKey()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function setParsedKey()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function has()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function get()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function choice()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function trans()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function transChoice()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function load()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function addNamespace()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getSelector()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function setSelector()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getLoader()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function locale()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getLocale()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function setLocale()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getFallback()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function setFallback()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }
} 