<?php namespace Divsmith\IlluminateDecouplr\Encryption;

use Divsmith\Decouplr\Decouplr;
use Illuminate\Encryption\Encrypter as IlluminateEncrypter;

abstract class Encrypter extends Decouplr {

    public function __construct(IlluminateEncrypter $encrypter)
    {
        $this->decoupled = $encrypter;
    }

    public function encrypt()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function decrypt()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function setKey()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function setCipher()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function setMode()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }
} 