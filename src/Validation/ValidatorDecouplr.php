<?php namespace LaravelDecouplr\Validator; 

use Decouplr\Decouplr;
use Illuminate\Validation\Validator;

abstract class ValidatorDecouplr extends Decouplr {

    public function __construct(Validator $validator){
        $this->decoupled = $validator;
    }

    public function sometimes()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function each()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function mergeRules()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function passes()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function fails()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getDisplayableValue()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getExtensions()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function addExtensions()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function addImplicitExtensions()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function addExtension()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function addImplicitExtension()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getReplacers()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function addReplacers()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function addReplacer()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getData()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getRules()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function setRules()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function setAttributeNames()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getFiles()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function setFiles()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getPresenceVerifier()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function setPresenceVerifier()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getTranslator()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function setTranslator()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getCustomMessages()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function setCustomMessages()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getFallbackMessages()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function setFallbackMessages()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function failed()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function messages()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function errors()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getMessageBag()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function setContainer()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }
} 