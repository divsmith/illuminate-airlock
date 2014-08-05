<?php namespace Divsmith\IlluminateAirlock\Encryption;

use Divsmith\Airlock\Airlock;
use Illuminate\Encryption\Encrypter as IlluminateEncrypter;

abstract class Encrypter extends Airlock {

    public function __construct(IlluminateEncrypter $encrypter)
    {
        $this->locker = $encrypter;
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