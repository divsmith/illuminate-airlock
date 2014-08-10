<?php namespace Divsmith\IlluminateAirlock\Queue;

use Divsmith\Airlock\Airlock;
use Illuminate\Queue\QueueManager as IlluminateQueueManager;

abstract class QueueManager extends Airlock {

    public function __construct(IlluminateQueueManager $manager)
    {
        $this->locker = $manager;
    }

    public function looping()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function failing()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function stopping()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function connected()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function connection()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function extend()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function addConnector()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getDefaultDriver()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function setDefaultDriver()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }

    public function getName()
    {
        return $this->delegate(__FUNCTION__, func_get_args());
    }
} 