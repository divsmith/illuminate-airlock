<?php namespace IlluminateDecouplr\Encryption; 

use Decouplr\Decouplr;
use Illuminate\Encryption\Encrypter;

abstract class EncrypterDecouplr extends Decouplr {

    public function __construct(Encrypter $encrypter)
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